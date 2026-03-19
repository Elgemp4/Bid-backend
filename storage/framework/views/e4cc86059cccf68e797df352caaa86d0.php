<?php $__env->startSection("content"); ?>
    <div class="min-h-screen flex flex-col">
        <header class="bg-bg flex justify-between px-8 py-4">
            <h1 class="text-2xl font-bold">Retro Relics</h1>
            <div class="flex items-center gap-4 ">
                <p>Connected as : <span><?php echo e(auth()->user()->name); ?></span></p>
                <form action="<?php echo e(route("uitloggen")); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <button class="button button-primary">Logout</button>
                </form>
            </div>
        </header>
        <div class="grid grid-cols-[15rem_auto] min-h-full flex-1">
            <nav class="bg-bg-light flex flex-col py-4 px-4 gap-4">
                <a class="button button-neutral block text-center" href="<?php echo e(route("kpi")); ?>">KPI</a>
                <a class="button button-neutral block text-center" href="<?php echo e(route("top")); ?>">Top 5 Products</a>
                <a class="button button-neutral block text-center" href="<?php echo e(route("no-bid")); ?>">Not bidded products</a>
                <a class="button button-neutral block text-center" href="<?php echo e(route("graph")); ?>">Category Income Graph</a>
            </nav>
            <main>
                <div class="p-8">
                    <h2 class="text-2xl text-muted"><?php echo $__env->yieldContent("title"); ?></h2>
                    <hr class="border-t border-border my-4"/>
                    <?php echo $__env->yieldContent("contents"); ?>
                </div>
            </main>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("templates.base", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/elgem/Documents/Worldskills/Laravel/Bid/resources/views/templates/dash.blade.php ENDPATH**/ ?>