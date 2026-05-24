 <div class="">

 <x-cms.sidebar/>
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
      
      @auth
 <a href="http://127.0.0.1:8000/cms/show-categories" target="_blank"
        class="border border-yellow-400 text-yellow-400 px-5 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition hidden md:block">
       پنل مدیریت
      </a>
      @else
         <a href="https://wa.me/989111773908" target="_blank"
        class="border border-yellow-400 text-yellow-400 px-5 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition hidden md:block">
        رزرو فوری
      </a>
      @endAuth
      </div>
     
      
    </div>
  </header>    
 </div>