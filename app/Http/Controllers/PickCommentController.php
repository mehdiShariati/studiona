<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\FetchCommentsFromInstagramApi;
use App\PickComment;

class PickCommentController extends Controller
{
    public function index()
    {
        return view('commentPicker.index');
    }

    public function start()
    {
        return view('commentPicker.start');
    }
    public function startFetching(Request $request)
    {
        $request->validate([
            "post_id"=>"required|min:6",
            "comment_count"=>"required",
        ]);

        $picker=PickComment::create([
            "post_id"=>$request->post_id,
            "comment_count"=>$request->comment_count,
        ]);
        FetchCommentsFromInstagramApi::dispatch($picker);

        return redirect('/commentPicker/pursuance/'.$picker->id);

    }


    public function pursuance(PickComment $picker)
    {
        if($picker->status === "InProgress") {
            return view("commentPicker.peygiri",['result'=>"لطفا چند دقیق دیگر مجدد این صفحه را رفرش کنید ، درخواست شما در حال انجام است. از صبر و شکیبایی شما متشکریم."
                                                      ,'link'=>''          ]);
        }
        return view("commentPicker.peygiri",['result'=>'سفارش شما آماده است ، میتوانید از لینک زیر آن را دانلود کنید.',
                                                    'link'=>$picker->final_file]);

    }
}
