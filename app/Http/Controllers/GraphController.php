<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index(){
        $categories = $this->getCategoryRevenues();

        return view('graph', compact('categories'));
    }
    private function getCategoryRevenues() {
        $best = Category::with("products.highestBid")->get()->map(function($item) {
            return [
                "title" => $item->title,
                "amount" => $item->products->sum("highestBid.amount"),
            ];
        })->sortByDesc("amount");

        return $best;
    }
}
