@extends("templates.dash")

@section("title", "Company's KPI")

@section("contents")
    <div class="flex flex-wrap gap-4 justify-center mt-8">
        <x-k-p-i :success="$bidCount > 600" title="Bid Count" :value="$bidCount . ' bids'"/>
        <x-k-p-i :success="$income > 120000" title="Total income" :value="$income . ' €'"/>
        <x-k-p-i :success="$bestCategory['title'] == 'Vehicle' or $bestCategory['title'] == 'Jewelry'" title="Best category" :value="$bestCategory['title'] . ' with ' . $bestCategory['amount'] . '€'" />
        <x-k-p-i :success="$percentageBidded > 93" title="Received a least one bit" :value="$percentageBidded . '%'"/>
        <x-k-p-i :success="$profitPercentage > 250" title="Profit percentage" :value="$profitPercentage . '%'"/>
    </div>
@endsection
