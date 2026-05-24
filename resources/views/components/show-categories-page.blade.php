@push("css")
    <link rel="stylesheet" href="{{ asset("css/service-page/app.css") }}">
@endpush

<div class="bg-[#0a0a0a] min-h-screen overflow-hidden" x-data="resizableSidebar()" x-init="init" >
    <x-header.header/>

    <div class="flex relative" id="body">
        <!-- سایدبار با قابلیت تغییر عرض و بدون اسکرول -->
       
            <x-sidebar.service-page :categories="$categories" routes="categories-page"/>
            <div class=" w-[0px] md:w-[25%]" >
                    <x-cms.sidebar-items :categories="$categories" :items="null"/>
     

            </div>
                


        <!-- محتوای اصلی -->
        <div class="flex-4 pt-22 px-8 overflow-x-auto w-full m-5">
           <img src="{{ $selectedCategory->image['indexArray']['large']  }}" class="w-full max-h-[60%] rounded-xl object-cover" alt="">

           <h3 class="my-10 ">
            {{ $selectedCategory->description }}
           </h3>
            </div>
        </div>
    </div>
</div>

