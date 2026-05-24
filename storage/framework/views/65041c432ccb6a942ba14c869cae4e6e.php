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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.service-page','data' => ['categories' => $allCategories,'routes' => 'service-page']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.service-page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($allCategories),'routes' => 'service-page']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cms.sidebar-items','data' => ['categories' => $allCategories,'items' => null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cms.sidebar-items'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($allCategories),'items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(null)]); ?>
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
                

        <!-- دسته کشیدن (Resize Handle) -->
        <div 
            class="w-1 bg-white/10 hover:bg-yellow-400 cursor-col-resize transition-colors relative group"
            @mousedown="startResize"
            :class="{ 'bg-yellow-400': isResizing }"
        >
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4L16 12L8 20"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4L8 12L16 20"></path>
                </svg>
            </div>
        </div>

        <!-- محتوای اصلی -->
        <div class="flex-1 pt-28 px-8 overflow-x-auto">
            <!-- محتوای اسلایدرها -->
            <div class="w-full" x-data="dragSlider()" x-init="initSliders">
                <!-- اسلایدر اول -->
                <div class="mb-12">
                    <h1 class="text-yellow-400 text-[20px] font-bold mb-4"> <?php echo e($slider1Category->title); ?></h1>
                    <div class="drag-area" x-ref="slider" 
                         @mousedown="startDrag($event, 'slider')" 
                         @mousemove="onDrag($event, 'slider')"
                         @mouseup="endDrag('slider')" 
                         @mouseleave="endDrag('slider')" 
                         @touchstart="startDrag($event, 'slider')" 
                         @touchmove="onDrag($event, 'slider')"
                         @touchend="endDrag('slider')">
                        <div class="image-track">

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $slider1Category->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <img class="image-card object-cover" src="<?php echo e($category->image['indexArray']['medium']); ?>" alt="عکس " draggable="false">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- اسلایدر دوم -->
                <div>
                    <h1 class="text-yellow-400 text-[20px] font-bold mb-4"> <?php echo e($slider2Category->title); ?></h1>
                    <div class="drag-area" x-ref="slider2" 
                         @mousedown="startDrag($event, 'slider2')" 
                         @mousemove="onDrag($event, 'slider2')"
                         @mouseup="endDrag('slider2')" 
                         @mouseleave="endDrag('slider2')" 
                         @touchstart="startDrag($event, 'slider2')" 
                         @touchmove="onDrag($event, 'slider2')"
                         @touchend="endDrag('slider2')">
                        <div class="image-track">
                               <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $slider2Category->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <img class="image-card object-cover" src="<?php echo e($category->image['indexArray']['medium']); ?>" alt="عکس " draggable="false">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // سایدبار دارگبل
    function resizableSidebar() {
        return {
            sidebarWidth: 280,
            minWidth: 80,
            maxWidth: 380,
            isResizing: false,
            
            init() {
                const savedWidth = localStorage.getItem('sidebarWidth');
                if (savedWidth) {
                    this.sidebarWidth = Math.min(this.maxWidth, Math.max(this.minWidth, parseInt(savedWidth)));
                }
            },
            
            startResize(e) {
                this.isResizing = true;
                e.preventDefault();
                document.body.classList.add('resizing');
                window.addEventListener('mousemove', this.resize.bind(this));
                window.addEventListener('mouseup', this.stopResize.bind(this));
            },
            
            resize(e) {
                if (!this.isResizing) return;
                let newWidth = e.clientX;
                if (newWidth < this.minWidth) newWidth = this.minWidth;
                if (newWidth > this.maxWidth) newWidth = this.maxWidth;
                this.sidebarWidth = newWidth;
            },
            
            stopResize() {
                this.isResizing = false;
                document.body.classList.remove('resizing');
                localStorage.setItem('sidebarWidth', this.sidebarWidth);
                window.removeEventListener('mousemove', this.resize);
                window.removeEventListener('mouseup', this.stopResize);
            }
        }
    }
    
    // اسلایدر درگ
    function dragSlider() {
        return {
            sliders: {},
            
            initSliders() {
                this.sliders = {
                    slider: { isDown: false, startX: 0, scrollLeft: 0 },
                    slider2: { isDown: false, startX: 0, scrollLeft: 0 }
                };
            },
            
            startDrag(e, sliderName) {
                e.preventDefault();
                const slider = this.$refs[sliderName];
                if (!slider) return;
                
                const state = this.sliders[sliderName];
                state.isDown = true;
                slider.classList.add('dragging');
                
                const pageX = e.touches ? e.touches[0].pageX : e.pageX;
                state.startX = pageX - slider.offsetLeft;
                state.scrollLeft = slider.scrollLeft;
            },
            
            onDrag(e, sliderName) {
                const state = this.sliders[sliderName];
                if (!state.isDown) return;
                
                e.preventDefault();
                const slider = this.$refs[sliderName];
                if (!slider) return;
                
                const pageX = e.touches ? e.touches[0].pageX : e.pageX;
                const x = pageX - slider.offsetLeft;
                const walk = (x - state.startX) * 1.5;
                slider.scrollLeft = state.scrollLeft - walk;
            },
            
            endDrag(sliderName) {
                const state = this.sliders[sliderName];
                if (!state.isDown) return;
                
                state.isDown = false;
                const slider = this.$refs[sliderName];
                if (slider) {
                    slider.classList.remove('dragging');
                }
            }
        }
    }
</script><?php /**PATH G:\programming\code\JameJam\resources\views/components/service-page.blade.php ENDPATH**/ ?>