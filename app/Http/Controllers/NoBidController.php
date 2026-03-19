<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NoBidController extends Controller
{
    public function index(){
        $nobid = Product::doesntHave("bids")->get();


        return view('nobid', compact("nobid"));
    }
}
