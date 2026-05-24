<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت</title>
    
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <?php echo app('Illuminate\Foundation\Vite')(  'resources/css/app.css' ); ?>
        <?php echo app('Illuminate\Foundation\Vite')(  'resources/js/app.js' ); ?>

    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body class="bg-gray-900 text-white">
    <?php echo e($slot); ?>

    
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <?php echo $__env->yieldPushContent('script'); ?>
</body>
</html><?php /**PATH G:\programming\code\JameJam\resources\views/components/main-layout.blade.php ENDPATH**/ ?>