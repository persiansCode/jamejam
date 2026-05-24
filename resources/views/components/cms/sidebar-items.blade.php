@props(['categories' => null , $items => null ])

<div class="flex-1 overflow-y-auto pt-4 px-4 sidebar-scroll mt-28 mb-8">
                  <div class=" hidden md:flex flex-col gap-3">
                         @php
                         $items = [
                            'مشاوره ها'=> 'cms.show-consulation', 

                            'دسته بندی ها' => 'cms.show-caregories' , 
                            'عکس ها'=> 'cms.show-images', 
                         ]
                         @endphp
                            @if($categories && count($categories) > 0)
            <div class="mt-4">
                <div class="text-gray-400 text-sm mb-2 px-2">دسته بندی‌ها</div>
                @foreach($categories as $category)
             
                    <div class="border border-white/10 bg-white/5 rounded-xl p-3 text-gray-300 
                                hover:border-yellow-400 hover:text-yellow-400 hover:bg-white/10 
                                transition-all duration-300 cursor-pointer mb-2"
                                onclick='window.location.href="{{ route('categories-page', ['category_id' => $category->id]) }}"'
                                >
                        <div class="flex items-center gap-3 w-full" >
                            <span class="text-sm">{{ $category->title }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            @else
             @foreach ($items as $item => $route)
                @php
                    $isActive = request()->routeIs($route);
                @endphp
                
                <div class="border rounded-xl p-4 text-gray-300 
                            hover:border-yellow-400 hover:text-yellow-400 hover:bg-white/10 
                            transition-all duration-300 cursor-pointer 
                            {{ $isActive ? 'border-yellow-400 text-yellow-400 bg-white/10' : 'border-white/10 bg-white/5' }}">
                    <div class="flex flex-col gap-5 w-full">
                        <a class="text-md" href="{{ route($route) }}">{{ $item }}</a>
                    </div>
                </div>
            @endforeach
        @endif
                        {{-- @foreach ($items as $item => $route )
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
                      @endforeach --}}
                </div>
            </div>