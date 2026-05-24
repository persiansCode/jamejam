<?php $__env->startPush("css"); ?>
    <link rel="stylesheet" href="<?php echo e(asset("css/service-page/app.css")); ?>">
<?php $__env->stopPush(); ?>

<div class="bg-[#0a0a0a] min-h-screen overflow-hidden" x-data="resizableSidebar()" x-init="init" >
    <?php if (isset($component)) { $__componentOriginal31957d141ae861b1f5561ff93907165b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal31957d141ae861b1f5561ff93907165b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal31957d141ae861b1f5561ff93907165b)): ?>
<?php $attributes = $__attributesOriginal31957d141ae861b1f5561ff93907165b; ?>
<?php unset($__attributesOriginal31957d141ae861b1f5561ff93907165b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal31957d141ae861b1f5561ff93907165b)): ?>
<?php $component = $__componentOriginal31957d141ae861b1f5561ff93907165b; ?>
<?php unset($__componentOriginal31957d141ae861b1f5561ff93907165b); ?>
<?php endif; ?>

    <div class="flex relative" id="body">
        <!-- سایدبار با قابلیت تغییر عرض و بدون اسکرول -->
       
            <?php if (isset($component)) { $__componentOriginal55bb44c570a45d5476a0743d2a72626c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal55bb44c570a45d5476a0743d2a72626c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.service-page','data' => ['categories' => $categories,'routes' => 'categories-page']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.service-page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'routes' => 'categories-page']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal55bb44c570a45d5476a0743d2a72626c)): ?>
<?php $attributes = $__attributesOriginal55bb44c570a45d5476a0743d2a72626c; ?>
<?php unset($__attributesOriginal55bb44c570a45d5476a0743d2a72626c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal55bb44c570a45d5476a0743d2a72626c)): ?>
<?php $component = $__componentOriginal55bb44c570a45d5476a0743d2a72626c; ?>
<?php unset($__componentOriginal55bb44c570a45d5476a0743d2a72626c); ?>
<?php endif; ?>
            <div class=" w-[0px] md:w-[25%]" >
                    <?php if (isset($component)) { $__componentOriginal135b2f31bda4c3ecc765e4a0b71fbabe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal135b2f31bda4c3ecc765e4a0b71fbabe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cms.sidebar-items','data' => ['categories' => $categories,'items' => null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cms.sidebar-items'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(null)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal135b2f31bda4c3ecc765e4a0b71fbabe)): ?>
<?php $attributes = $__attributesOriginal135b2f31bda4c3ecc765e4a0b71fbabe; ?>
<?php unset($__attributesOriginal135b2f31bda4c3ecc765e4a0b71fbabe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal135b2f31bda4c3ecc765e4a0b71fbabe)): ?>
<?php $component = $__componentOriginal135b2f31bda4c3ecc765e4a0b71fbabe; ?>
<?php unset($__componentOriginal135b2f31bda4c3ecc765e4a0b71fbabe); ?>
<?php endif; ?>
     

            </div>
                


        <!-- محتوای اصلی -->
        <div class="flex-4 pt-22 px-8 overflow-x-auto w-full m-5">
           <img src="<?php echo e($selectedCategory->image['indexArray']['large']); ?>" class="w-full max-h-[60%] rounded-xl object-cover" alt="">

           <h3 class="my-10 ">
            <?php echo e($selectedCategory->description); ?>

           </h3>
            </div>
        </div>
    </div>
</div>

<?php /**PATH G:\programming\code\JameJam\resources\views/components/show-categories-page.blade.php ENDPATH**/ ?>