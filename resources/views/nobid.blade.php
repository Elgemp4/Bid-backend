@extends("templates.dash")

@section("title", "Not bidded products")

@section("contents")
    <div class="flex flex-col p-2 items-center">

        @foreach($nobid as $top)
            @php
                $image = "images/".$top->image.".jpg"
            @endphp
            <div class="flex flex-col mb-4 bg-bg-light gap-2 p-8">
                <h2 class="text-2xl font-bold">{{$top->title}}</h2>
                <img class="max-w-md" src="{{$image}}" alt="{{$top->titlte}}"/>
            </div>
    @endforeach
@endsection
