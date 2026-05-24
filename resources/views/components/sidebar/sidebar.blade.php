  <div x-data="{ open: false }" class="z-100 fixed top-0 right-0 ">
  <x-sidebar.sidebar-icon/>
   <div 
        class="fixed top-0 right-0 h-full bg-gray-700 z-40 transition-all duration-300 "
        :class="open ? 'w-[80%]' : 'w-0'"
    >
    <div class="flex w-full justify-around " >
         <x-sidebar.sidebar-icon/>
           <a href="https://wa.me/989111773908" target="_blank" x-show="open"
         class="border border-yellow-400 text-yellow-400 px-5 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition absolute top-6 left-8 ">
        رزرو فوری
      </a>
    </div>
       

          <nav class=" flex flex-col gap-8 text-sm w-full h-full justify-center items-center" x-show="open">
        <a href="#home" class="text-gray-200 hover:text-yellow-400  transition duration-300 ease-in-out">خانه</a>
        <a href="#services" class="text-gray-200 hover:text-yellow-400  transition duration-300 ease-in-out">خدمات</a>
        <a href="#portfolio" class="text-gray-200 hover:text-yellow-400  transition duration-300 ease-in-out">نمونه کار</a>
        <a href="#about" class="text-gray-200 hover:text-yellow-400  transition duration-300 ease-in-out">درباره ما</a>
        <a href="#contact" class="text-gray-200 hover:text-yellow-400  transition duration-300 ease-in-out">تماس</a>
      </nav>
    </div>
</div>