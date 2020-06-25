<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "full_name"=>"required",
            "phoneNumber"=>"required|max:11|min:11",
            "description"=>"required"
        ]);
        Customer::create([
            "name"=>$request->full_name,
            "number"=>$request->phoneNumber,
            "description"=>$request->description
        ]);

        return back()->with('success',"اطلاعات شما ثبت شده به زودی همکاران ما با شما تماس خواهند گرفت");
    }

    public function index(Customer $customer)
    {
        return view("admin.customers.index",[
            "customer"=>  $customer::all()
        ]);

    }
}
