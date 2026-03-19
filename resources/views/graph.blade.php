@extends("templates.dash")

@section("title", "Categories income graph")

@section("contents")
    <div class="flex items-center flex-col">
        <div class="relative w-64 h-64 rounded-full overflow-hidden">
            @php
                $total = collect($categories)->sum(fn($v) => $v["amount"]);
                $current = 0;
                $i=0;
                $color= ["#ec003f", "#4bc0a8", "#d9d9a8", "#c586c0", "#bb846d", "#569cd6"];
            @endphp

            @foreach($categories as $category)
                @php
                    $start = ($current / $total) * 360;
                    $end = $start + ($category["amount"] / $total) * 360;
                @endphp
                <div class="absolute inset-0 w-full h-full" style="background-image: conic-gradient(transparent {{$start}}deg, {{$color[$i]}} {{$start}}deg, {{$color[$i]}} {{$end}}deg, transparent {{$end}}deg)"></div>
                @php
                    $current+=$category["amount"];
                    $i++;
                @endphp
            @endforeach
        </div>

        <div class="bg-bg-light px-10 py-6 mt-8">
            <h2 class="text-muted text-2xl mb-4 ">Legend</h2>
            <div class="flex flex-col gap-4 bg-bg-light">
                @php
                    $i=0
                @endphp
                @foreach($categories as $category)
                    <div class="flex items-ceneter  gap-4">
                        <div class="w-8 h-8" style="background-color: {{$color[$i]}}"></div>
                        <span>{{$category["title"]}} ({{$category["amount"]}}€)</span>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>
        </div>

    </div>

@endsection
