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
    
    {{-- آیکون باز کردن سایدبار --}}
    <div class="fixed top-4 right-4 z-50">
        <x-cms.sidebar-icon @click="open = !open" />
    </div>

    {{-- overlay --}}
    <div x-show="open" @click="open = false" class="fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden"></div>

    {{-- سایدبار --}}
    <div 
        class="fixed top-0 right-0 h-full bg-gray-800 z-40 transition-all duration-300 overflow-hidden"
        :class="open ? 'translate-x-0' : 'translate-x-full'"
        :style="`width: ${sidebarWidth}px`">
        
        {{-- هندل تغییر سایز --}}
        <div 
            @mousedown="initResize"
            class="absolute left-0 top-0 w-1.5 h-full cursor-col-resize hover:bg-yellow-400 transition-colors group z-50">
            <div class="absolute inset-y-0 -left-1 -right-1"></div> {{-- منطقه کلیک بزرگتر --}}
        </div>

        {{-- محتوای سایدبار --}}
        <div class="h-full flex flex-col pt-18">
            {{-- هدر --}}
            <div class=" border-b border-gray-700">
                {{-- <h2 class="text-white text-xl font-bold">منو</h2> --}}
            </div>

            {{-- منو با اسکرول مخفی --}}
            <div class="flex-1 overflow-y-auto pt-4 px-4 sidebar-scroll">
                <div class="flex flex-col gap-3">
                     @php
                         $items = [
                            'دسته بندی ها' => 'cms.show-caregories' , 
                            'عکس ها'=> 'cms.show-images', 
                         ]
                         @endphp
                        @foreach ($items as $item => $route )
                        @php
                        $isActive = request()->routeIs($route)
                        @endphp
                      
                        <div class="border border-white/10 bg-white/5 rounded-xl p-4 text-gray-300 
                                        hover:border-yellow-400 hover:text-yellow-400 hover:bg-white/10 
                                        transition-all duration-300 cursor-pointer 
                                        {{ $isActive ? ' border-yellow-400 text-yellow-400 ' : 'border-white/10 bg-white/5' }}
                                        ">
                            <div class="flex flex-col  gap-5 w-full" >
                               
                                <a class="text-md  " href="{{ route("$route") }}" > {{ $item }}</a>
                            
                            </div>
                        </div>
                      @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
