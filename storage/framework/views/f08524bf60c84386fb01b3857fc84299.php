  <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['categories' => null , 'routes' => '']));

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

foreach (array_filter((['categories' => null , 'routes' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
  <div x-data="{ open: false }" class="z-100 fixed top-0 right-0 ">
  <?php if (isset($component)) { $__componentOriginal4119cfdac7f616f3e7abfedad96cf232 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4119cfdac7f616f3e7abfedad96cf232 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sidebar-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sidebar-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4119cfdac7f616f3e7abfedad96cf232)): ?>
<?php $attributes = $__attributesOriginal4119cfdac7f616f3e7abfedad96cf232; ?>
<?php unset($__attributesOriginal4119cfdac7f616f3e7abfedad96cf232); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4119cfdac7f616f3e7abfedad96cf232)): ?>
<?php $component = $__componentOriginal4119cfdac7f616f3e7abfedad96cf232; ?>
<?php unset($__componentOriginal4119cfdac7f616f3e7abfedad96cf232); ?>
<?php endif; ?>
   <div 
        class="fixed top-0 right-0 h-full bg-gray-700 z-40 transition-all duration-300 "
        :class="open ? 'w-[80%]' : 'w-0'"
    >
    <div class="flex w-full justify-around " >
         <?php if (isset($component)) { $__componentOriginal4119cfdac7f616f3e7abfedad96cf232 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4119cfdac7f616f3e7abfedad96cf232 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sidebar-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sidebar-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4119cfdac7f616f3e7abfedad96cf232)): ?>
<?php $attributes = $__attributesOriginal4119cfdac7f616f3e7abfedad96cf232; ?>
<?php unset($__attributesOriginal4119cfdac7f616f3e7abfedad96cf232); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4119cfdac7f616f3e7abfedad96cf232)): ?>
<?php $component = $__componentOriginal4119cfdac7f616f3e7abfedad96cf232; ?>
<?php unset($__componentOriginal4119cfdac7f616f3e7abfedad96cf232); ?>
<?php endif; ?>
           <a href="https://wa.me/989111773908" target="_blank" x-show="open"
         class="border border-yellow-400 text-yellow-400 px-3 py-1 rounded-full hover:bg-yellow-400 hover:text-black transition absolute top-6 left-8 ">
        رزرو فوری
      </a>
    </div>
       

          <nav class=" flex flex-col gap-8 text-sm w-full h-full justify-center items-center" x-show="open">
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($categories && count($categories) > 0): ?>
            <div class="mt-8">
                <div class="text-gray-400 text-sm mb-2 mt-2  px-2">دسته بندی‌ها</div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
             
                    <div class="border border-white/10 bg-white/5 rounded-xl p-3 text-gray-300 
                                hover:border-yellow-400 hover:text-yellow-400 hover:bg-white/10 
                                transition-all duration-300 cursor-pointer mb-2"
                                onclick='window.location.href="<?php echo e(route($routes, ['category_id' => $category->id])); ?>"'
                                >
                        <div class="flex items-center gap-3 w-full" >
                            <span class="text-sm"><?php echo e($category->title); ?></span>
                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </nav>
    </div>
</div><?php /**PATH G:\programming\code\JameJam\resources\views/components/sidebar/service-page.blade.php ENDPATH**/ ?>