  @props(['categories' => null , 'routes' => ''])
  <div x-data="{ open: false }" class="z-100 fixed top-0 right-0 ">
  <x-sidebar.sidebar-icon/>
   <div 
        class="fixed top-0 right-0 h-full bg-gray-700 z-40 transition-all duration-300 "
        :class="open ? 'w-[80%]' : 'w-0'"
    >
    <div class="flex w-full justify-around " >
         <x-sidebar.sidebar-icon/>
           <a href="https://wa.me/989111773908" target="_blank" x-show="open"
         class="border border-yellow-400 text-yellow-400 px-3 py-1 rounded-full hover:bg-yellow-400 hover:text-black transition absolute top-6 left-8 ">
        رزرو فوری
      </a>
    </div>
       

          <nav class=" flex flex-col gap-8 text-sm w-full h-full justify-center items-center" x-show="open">
          @if($categories && count($categories) > 0)
            <div class="mt-8">
                <div class="text-gray-400 text-sm mb-2 mt-2  px-2">دسته بندی‌ها</div>
                @foreach($categories as $category)
             
                    <div class="border border-white/10 bg-white/5 rounded-xl p-3 text-gray-300 
                                hover:border-yellow-400 hover:text-yellow-400 hover:bg-white/10 
                                transition-all duration-300 cursor-pointer mb-2"
                                onclick='window.location.href="{{ route($routes, ['category_id' => $category->id]) }}"'
                                >
                        <div class="flex items-center gap-3 w-full" >
                            <span class="text-sm">{{ $category->title }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
      </nav>
    </div>
</div>