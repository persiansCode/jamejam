<div x-data="{ 
    open: false, 
    sidebarWidth: 280,
    isResizing: false,
    startX: 0,
    startWidth: 0,
    
    initResize(e) {
        this.isResizing = true;
        this.startX = e.clientX;
        this.startWidth = this.sidebarWidth;
        
        document.addEventListener('mousemove', this.resize);
        document.addEventListener('mouseup', this.stopResize);
    },
    
    resize(e) {
        if (!this.isResizing) return;
        const diff = this.startX - e.clientX;
        this.sidebarWidth = Math.max(200, Math.min(500, this.startWidth + diff));
    },
    
    stopResize() {
        this.isResizing = false;
        document.removeEventListener('mousemove', this.resize);
        document.removeEventListener('mouseup', this.stopResize);
    }
}" class="z-50 fixed top-0 right-0 h-full">
    
    
    <div class="fixed top-4 right-4 z-50">
        <?php if (isset($component)) { $__componentOriginal8124e35d661ff17702350e749965f928 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8124e35d661ff17702350e749965f928 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cms.sidebar-icon','data' => ['@click' => 'open = !open']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cms.sidebar-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'open = !open']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8124e35d661ff17702350e749965f928)): ?>
<?php $attributes = $__attributesOriginal8124e35d661ff17702350e749965f928; ?>
<?php unset($__attributesOriginal8124e35d661ff17702350e749965f928); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8124e35d661ff17702350e749965f928)): ?>
<?php $component = $__componentOriginal8124e35d661ff17702350e749965f928; ?>
<?php unset($__componentOriginal8124e35d661ff17702350e749965f928); ?>
<?php endif; ?>
    </div>

    
    <div x-show="open" @click="open = false" class="fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden"></div>

    
    <div 
        class="fixed top-0 right-0 h-full bg-gray-800 z-40 transition-all duration-300 overflow-hidden"
        :class="open ? 'translate-x-0' : 'translate-x-full'"
        :style="`width: ${sidebarWidth}px`">
        
        
        <div 
            @mousedown="initResize"
            class="absolute left-0 top-0 w-1.5 h-full cursor-col-resize hover:bg-yellow-400 transition-colors group z-50">
            <div class="absolute inset-y-0 -left-1 -right-1"></div> 
        </div>

        
        <div class="h-full flex flex-col pt-18">
            
            <div class=" border-b border-gray-700">
                
            </div>

            
            <div class="flex-1 overflow-y-auto pt-4 px-4 sidebar-scroll">
                <div class="flex flex-col gap-3">
                     <?php
                         $items = [
                            'دسته بندی ها' => 'cms.show-caregories' , 
                            'عکس ها'=> 'cms.show-images', 
                         ]
                         ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item => $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <?php
                        $isActive = request()->routeIs($route)
                        ?>
                      
                        <div class="border border-white/10 bg-white/5 rounded-xl p-4 text-gray-300 
                                        hover:border-yellow-400 hover:text-yellow-400 hover:bg-white/10 
                                        transition-all duration-300 cursor-pointer 
                                        <?php echo e($isActive ? ' border-yellow-400 text-yellow-400 ' : 'border-white/10 bg-white/5'); ?>

                                        ">
                            <div class="flex flex-col  gap-5 w-full" >
                               
                                <a class="text-md  " href="<?php echo e(route("$route")); ?>" > <?php echo e($item); ?></a>
                            
                            </div>
                        </div>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH G:\programming\code\JameJam\resources\views/components/cms/sidebar.blade.php ENDPATH**/ ?>