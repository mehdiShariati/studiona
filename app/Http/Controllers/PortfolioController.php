<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Category_portfolio;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("admin.portfolio.create",['cats'=>Category_portfolio::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "couple_name"=>"required",
            "images"=>"required",
            "description"=>"required",
            "category_portfolio_id"=>"required"

        ]);
//        $this->validate($request, [
//
//            'filename' => 'required',
//            'filename.*' => 'mimes:doc,pdf,docx,zip'
//
//        ]);
//
//
//        if($request->hasfile('filename'))
//        {
//
//            foreach($request->file('filename') as $file)
//            {
//                $name=$file->getClientOriginalName();
//                $file->move(public_path().'/files/', $name);
//                $data[] = $name;
//            }
//        }
//
//        $file= new File();
//        $file->filename=json_encode($data);
//
//
//        $file->save();
        $image_names=[];
        $movie_names=[];


        if($request->files->has('images')){
            foreach($request->files->get('images') as $file)
            {

                $name=$request->couple_name.time().".".$file->getClientOriginalName();

                $file->move(public_path("uploads/portfolios/images"), $name);
                array_push($image_names,$name);
            }
        }

        if($request->files->has('movies')) {
            foreach($request->files->get('movies') as $movie)
            {

                $name=$request->couple_name.$movie->getClientOriginalName();
                $movie->move(public_path("uploads/portfolios/movies"), $name);
                array_push($movie_names,$name);
            }
        }
        $cat_id=(int)$request->category_portfolio_id;
        Portfolio::create([
            "couple_name"=>$request->couple_name,
            "images"=>json_encode($image_names,JSON_PRETTY_PRINT),
            "movies"=>json_encode($movie_names,JSON_PRETTY_PRINT),
            "description"=>$request->description,
            "category_portfolio_id"=>$cat_id

        ]);

       
      return  back()->with('success',"نمونه کار  با موفقیت ثبت شد");;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
