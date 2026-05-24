 <div class="">

 <?php if (isset($component)) { $__componentOriginal74d802cf7a5eaf6acf6d15063c8cbaad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74d802cf7a5eaf6acf6d15063c8cbaad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cms.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cms.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74d802cf7a5eaf6acf6d15063c8cbaad)): ?>
<?php $attributes = $__attributesOriginal74d802cf7a5eaf6acf6d15063c8cbaad; ?>
<?php unset($__attributesOriginal74d802cf7a5eaf6acf6d15063c8cbaad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74d802cf7a5eaf6acf6d15063c8cbaad)): ?>
<?php $component = $__componentOriginal74d802cf7a5eaf6acf6d15063c8cbaad; ?>
<?php unset($__componentOriginal74d802cf7a5eaf6acf6d15063c8cbaad); ?>
<?php endif; ?>
  <header class="fixed top-0 left-0 w-full z-50 backdrop-blur-md bg-black/70 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-end md:justify-between ">
      <div>
        <h1 class="text-3xl font-bold tracking-widest text-yellow-400">JAM E JAM</h1>
        <p class="text-xs text-gray-400 tracking-widest">PHOTOGRAPHY & FILM</p>
      </div>



      <nav class="hidden md:flex gap-8 text-sm">
        <a href="#home" class="text-gray-200 hover:text-yellow-400  transition duration-300 ease-in-out">خانه</a>
        <a href="#services" class="text-gray-200 hover:text-yellow-400  transition duration-300 ease-in-out">خدمات</a>
        <a href="#portfolio" class="text-gray-200 hover:text-yellow-400  transition duration-300 ease-in-out">نمونه
          کار</a>
        <a href="#about" class="text-gray-200 hover:text-yellow-400  transition duration-300 ease-in-out">درباره ما</a>
        <a href="#contact" class="text-gray-200 hover:text-yellow-400  transition duration-300 ease-in-out">تماس</a>
      </nav>

      <div class="flex gap-4">
      
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
 <a href="http://127.0.0.1:8000/cms/show-categories" target="_blank"
        class="border border-yellow-400 text-yellow-400 px-5 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition hidden md:block">
       پنل مدیریت
      </a>
      <?php else: ?>
         <a href="https://wa.me/989111773908" target="_blank"
        class="border border-yellow-400 text-yellow-400 px-5 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition hidden md:block">
        رزرو فوری
      </a>
      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </div>
     
      
    </div>
  </header>    
 </div><?php /**PATH G:\programming\code\JameJam\resources\views/components/header/header.blade.php ENDPATH**/ ?>