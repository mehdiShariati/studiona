<?php

namespace App\Http\Controllers;

use App\Category_portfolio;
use Illuminate\Http\Request;

class Category_portfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category_portfolio::all();
        return view("admin.category_portfolio.index",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("admin.category_portfolio.create_category");
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
           "name"=>"required",
           "cat_image"=>"required|mimes:jpg,png,jpeg,svg"
       ]);

        $fileName = time().'.'.$request->cat_image->extension();
        $request->cat_image->move(public_path('uploads/category'), $fileName);

        Category_portfolio::create([
            "name"=>$request->name,
            "image"=>$fileName
        ]);

      return  back()->with('success',"دسته بندی با موفقیت ثبت شد");;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category_portfolio  $category_portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Category_portfolio $category_portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category_portfolio  $category_portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_portfolio $category_portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category_portfolio  $category_portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category_portfolio $category_portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category_portfolio  $category_portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_portfolio $category_portfolio)
    {
      $category_portfolio->delete();
        return back();
    }
}
