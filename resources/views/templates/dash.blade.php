@extends("templates.base")


@section("content")
    <div class="min-h-screen flex flex-col">
        <header class="bg-bg flex justify-between px-8 py-4">
            <h1 class="text-2xl font-bold">Retro Relics</h1>
            <div class="flex items-center gap-4 ">
                <p>Connected as : <span>{{auth()->user()->name}}</span></p>
                <form action="{{route("uitloggen")}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="button button-primary">Logout</button>
                </form>
            </div>
        </header>
        <div class="grid grid-cols-[15rem_auto] min-h-full flex-1">
            <nav class="bg-bg-light flex flex-col py-4 px-4">
                <a class="button button-neutral block text-center" href="{{route("kpi")}}">KPI</a>
            </nav>
            <main>
                <div class="p-8">
                    <h2 class="text-2xl text-muted">@yield("title")</h2>
                    <hr class="border-t border-border my-4"/>
                    @yield("contents")
                </div>

            </main>
        </div>
    </div>

@endsection
