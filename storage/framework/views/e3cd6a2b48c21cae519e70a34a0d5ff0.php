  <div class="z-40">
    <!-- آیکون همبرگری -->
    <div 
        class="absolute md:hidden right-5 top-5 transition-all duration-300"
        x-show="!open"
        x-transition.opacity.duration.300ms
    >
        <i class="fas fa-bars text-yellow-400 text-[20px]" @click="open = !open"></i>
    </div>

    <!-- آیکون ضربدر -->
    <div 
        class="absolute md:hidden right-5 top-5 transition-all duration-300"
        x-show="open"
        x-transition.opacity.duration.300ms
    >
        <i class="fas fa-times text-yellow-400 text-[20px]" @click="open = !open"></i>
    </div>
</div><?php /**PATH G:\programming\code\JameJam\resources\views/components/cms/sidebar-icon.blade.php ENDPATH**/ ?>