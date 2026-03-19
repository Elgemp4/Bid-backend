@props(["name", "value" => "", "label", "type" => "text"])

<div class="flex flex-col gap-2 mb-4">
    <label class="text-muted" for="{{$name}}}">{{$label}}</label>
    <input class=" border  border-border outline-primary focus:outline-1 rounded-md px-6 py-2" id="{{$name}}" name="{{$name}}" type="{{$type}}" value="{{$value}}"/>
    @error($name)
        <p class="text-red-500">{{$message}}</p>
    @enderror
</div>
