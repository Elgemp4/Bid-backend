<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((["title", "value", "success"]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((["title", "value", "success"]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(["border border-border rounded-md max-w-[33%] p-2 flex flex-col justify-center items-center bg-bg-light"]); ?>">
    <h3 class="<?php echo \Illuminate\Support\Arr::toCssClasses(["text-green-500" => $success, "text-red-500" => !$success]); ?>"><?php echo e($title); ?></h3>
    <hr class="border-t border-border my-2 w-full">
    <span><?php echo e($value); ?></span>
</div>
<?php /**PATH /home/elgem/Documents/Worldskills/Laravel/Bid/resources/views/components/k-p-i.blade.php ENDPATH**/ ?>