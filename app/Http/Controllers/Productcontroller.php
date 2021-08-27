<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class Productcontroller extends Controller
{
    //
    function index(){

        $data= products::all();
        return view('product',['products'=>$data]);
    }
}
