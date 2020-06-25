<?php

namespace App\Http\Controllers;

use App\Category_portfolio;
use Illuminate\Http\Request;
use App\Portfolio;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories=Category_portfolio::all();
        return view('home',compact('categories'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function portfolios()
    {
        $categories=Category_portfolio::all();
        return view('portfolios',compact('categories'));
    }
    public function show_portfolios($category_portfolio)
    {
        $cat=Category_portfolio::where('name',$category_portfolio)->first()->id;
       $ports=Portfolio::where("category_portfolio_id",$cat)->get();
       $portfolios=[];
       foreach ($ports as $item){

          $data=json_decode($item['images']);

         array_push($portfolios,[
            "image"=>$data[0],
            "image_count"=>count($data),
             "couple_name"=>$item->couple_name,
             "id"=>$item->id
         ]);


       }


  return view('single_portfolio_category',compact('portfolios'));
    }

    public function show_single_portfolio(Portfolio $Portfolio)
    {

        return view("single_portfolio",[
            "port"=>$Portfolio,
            "images"=>json_decode($Portfolio->images)
        ]);
    }
    public function reserve()
    {
        return view('reserve');
    }
}
