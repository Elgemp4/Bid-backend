@props(["title", "value", "success"])

<div @class(["border border-border rounded-md max-w-[33%] p-2 flex flex-col justify-center items-center bg-bg-light"])>
    <h3 @class(["text-green-500" => $success, "text-red-500" => !$success])>{{$title}}</h3>
    <hr class="border-t border-border my-2 w-full">
    <span>{{$value}}</span>
</div>
