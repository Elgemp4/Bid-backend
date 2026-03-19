@extends("templates.base")



@section("title", "Login")


@section("content")

    <div class="h-screen flex justify-center items-center">
        <form class="bg-bg p-4 border border-border flex flex-col" action="{{route("login")}}" method="POST" >
            @csrf
            <h1 class="font-bold text-xl text-center mb-8">Login</h1>
            <x-input name="name" label="Username" />
            <x-input name="password" label="Password" type="password" />
            <button class="button button-primary mt-4">Login</button>
        </form>
    </div>
@endsection
