<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Category;
use App\Models\Product;

class KPIController extends Controller
{
    public function index() {
        $bidCount = $this->getBidCount();
        $income = $this->getTotalIncome();
        $bestCategory = $this->getBestScoringCategory();
        $percentageBidded = $this->getPercentageAtLeastOneBid();
        $profitPercentage = $this->getProfitPercentage();
        return view('kpi', compact('bidCount', 'income', 'bestCategory', 'percentageBidded', 'profitPercentage'));
    }

    private function getBidCount() {
        return Bid::all()->count();
    }

    private function getTotalIncome() {
        $total = Product::with("highestBid")->get()->sum("highestBid.amount");
        return $total;
    }

    private function getBestScoringCategory() {
        $best = Category::with("products.highestBid")->get()->map(function($item) {
            return [
                "title" => $item->title,
                "amount" => $item->products->sum("highestBid.amount"),
            ];
        })->sortByDesc("amount");

        return $best[0];
    }

    private function getPercentageAtLeastOneBid() {
        $total = Product::all()->count();
        $hasOneBid = Product::has("bids")->get()->count();

        return $hasOneBid/$total *100;
    }

    private function getProfitPercentage() {
        $total = $this->getTotalIncome();
        $totalMin = Product::has("bids")->sum("minimal_price");

        return $total / $totalMin * 100;
    }
}
