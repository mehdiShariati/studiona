<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function dashboard()
    {
        return view("admin.dashboard");
    }

    public function portfolio()
    {
        return view("admin.portfolio");
    }
    public function createCategoryPortfolio()
    {
        return view("admin.categoryPortfolio.create");
    }
}
