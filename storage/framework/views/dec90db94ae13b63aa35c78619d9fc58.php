<?php $__env->startPush("css"); ?>
  <link rel="stylesheet" href="<?php echo e(asset("css/first-page/app.css")); ?>">
<?php $__env->stopPush(); ?>
<div class=" w-[90%] md:w-[50%] m-auto mt-38">
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
      <form wire:submit="submit" method="post" class="bg-black/40 p-8 rounded-2xl">

       <div class="flex items-center justify-between">
              <h4 class="text-2xl font-bold mb-6 text-gray-200">فرم ورود</h4>
       <div class="mb-6 hidden md:block">
        <h1 class="text-xl font-bold tracking-widest text-yellow-400">JAM E JAM</h1>
        <p class="text-[12px] text-gray-400 tracking-widest">PHOTOGRAPHY & FILM</p>
      </div>            
      
 
       </div>
       
        <input type="text" placeholder=" ایمیل شما "
          wire:model="email"
          class="w-full bg-black/30 border border-white/20 rounded-2xl px-5 py-4 mb-4 placeholder-gray-300">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-400 text-[16px] px-6 "><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <input type="tel" dir="rtl" placeholder=" رمز عبور "
          wire:model="password"

          class="w-full bg-black/30 border border-white/20 rounded-2xl px-5 py-4 mb-4 placeholder-gray-300">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ["password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-400 text-[16px] px-6 "><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        
            
        <button class="w-full mt-6 bg-red-500 text-black py-4 rounded-2xl font-bold" type="submit"> ثبت نام </button>
       </form>
         <?php $__env->startPush('script'); ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
              
                <?php if(session()->has('swal_title')): ?>



                    Swal.fire({
                        title: <?php echo json_encode(session('swal_title'), 15, 512) ?>,
                        text: <?php echo json_encode(session('swal_text'), 15, 512) ?>,
                        icon: <?php echo json_encode(session('swal_icon'), 15, 512) ?>,
                    });


                <?php endif; ?>
            })
        </script>
    <?php $__env->stopPush(); ?>

</div><?php /**PATH G:\programming\code\JameJam\resources\views/components/login-cms-page.blade.php ENDPATH**/ ?>