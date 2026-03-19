<?php $__env->startSection("title", "Company's KPI"); ?>


<?php $__env->startSection("contents"); ?>
    <div class="flex flex-wrap gap-4">
        <?php if (isset($component)) { $__componentOriginalbb7d74c55e41de39bdc4e4090d82958c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c = $attributes; } ?>
<?php $component = App\View\Components\KPI::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('k-p-i'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\KPI::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['success' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bidCount > 600),'title' => 'Bid Count','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bidCount . ' bids')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c)): ?>
<?php $attributes = $__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c; ?>
<?php unset($__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb7d74c55e41de39bdc4e4090d82958c)): ?>
<?php $component = $__componentOriginalbb7d74c55e41de39bdc4e4090d82958c; ?>
<?php unset($__componentOriginalbb7d74c55e41de39bdc4e4090d82958c); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalbb7d74c55e41de39bdc4e4090d82958c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c = $attributes; } ?>
<?php $component = App\View\Components\KPI::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('k-p-i'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\KPI::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['success' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($income > 120000),'title' => 'Total income','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($income . ' €')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c)): ?>
<?php $attributes = $__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c; ?>
<?php unset($__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb7d74c55e41de39bdc4e4090d82958c)): ?>
<?php $component = $__componentOriginalbb7d74c55e41de39bdc4e4090d82958c; ?>
<?php unset($__componentOriginalbb7d74c55e41de39bdc4e4090d82958c); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalbb7d74c55e41de39bdc4e4090d82958c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c = $attributes; } ?>
<?php $component = App\View\Components\KPI::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('k-p-i'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\KPI::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['success' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bestCategory['title'] == 'Vehicle' or $bestCategory['title'] == 'Jewelry'),'title' => 'Best category','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bestCategory['title'] . ' with ' . $bestCategory['amount'] . '€')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c)): ?>
<?php $attributes = $__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c; ?>
<?php unset($__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb7d74c55e41de39bdc4e4090d82958c)): ?>
<?php $component = $__componentOriginalbb7d74c55e41de39bdc4e4090d82958c; ?>
<?php unset($__componentOriginalbb7d74c55e41de39bdc4e4090d82958c); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalbb7d74c55e41de39bdc4e4090d82958c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c = $attributes; } ?>
<?php $component = App\View\Components\KPI::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('k-p-i'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\KPI::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['success' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($percentageBidded > 93),'title' => 'Received a least one bit','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($percentageBidded . '%')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c)): ?>
<?php $attributes = $__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c; ?>
<?php unset($__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb7d74c55e41de39bdc4e4090d82958c)): ?>
<?php $component = $__componentOriginalbb7d74c55e41de39bdc4e4090d82958c; ?>
<?php unset($__componentOriginalbb7d74c55e41de39bdc4e4090d82958c); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalbb7d74c55e41de39bdc4e4090d82958c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c = $attributes; } ?>
<?php $component = App\View\Components\KPI::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('k-p-i'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\KPI::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['success' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profitPercentage > 250),'title' => 'Profit percentage','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profitPercentage . '%')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c)): ?>
<?php $attributes = $__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c; ?>
<?php unset($__attributesOriginalbb7d74c55e41de39bdc4e4090d82958c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb7d74c55e41de39bdc4e4090d82958c)): ?>
<?php $component = $__componentOriginalbb7d74c55e41de39bdc4e4090d82958c; ?>
<?php unset($__componentOriginalbb7d74c55e41de39bdc4e4090d82958c); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("templates.dash", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/elgem/Documents/Worldskills/Laravel/Bid/resources/views/kpi.blade.php ENDPATH**/ ?>