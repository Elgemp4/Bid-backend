<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(){
        $tops = Product::withCount("bids")->orderBy("bids_count","desc")->take(5)->get();
        return view('top', compact('tops'));
    }
}
