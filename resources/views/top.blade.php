@extends("templates.dash")

@section("title", "Top 5 products")

@section("contents")
    @php
        $i = 1
    @endphp
    <div class="flex flex-col p-2 items-center">

        @foreach($tops as $top)
            @php
                $image = "images/".$top->image.".jpg"
            @endphp
            <div class="flex flex-col mb-4 bg-bg-light gap-2 p-8">
                <h2 class="text-2xl font-bold">{{$i}} - {{$top->title}}</h2>
                <img class="max-w-md" src="{{$image}}" alt="{{$top->titlte}}"/>
                <hr class="border-b border-border my-4">
                <h3 class="text-muted text-center">BID COUNT</h3>
                <p class="text-center">{{$top->bids_count}} bids</p>
            </div>
            @php
                $i+=1
            @endphp
        @endforeach
    </div>

@endsection
