@push("css")
    <link rel="stylesheet" href="{{ asset("css/cms/show-images/app.css") }}">
@endpush
<div>
    <x-header.header />
    <div class="grid grid-cols-12">

        <div class="col-span-12 md:col-span-2">
  <x-cms.sidebar/>
                                 <x-cms.sidebar-items :categories="null" :items="null"/>


        </div>
        <div class="col-span-12 md:col-span-10 pb-10">
            <div class="flex w-full items-center mt-10 md:mt-38 md:justify-start justify-center pl-0 pr-0 md:pr-5">
                <button class="btn bg-yellow-400  w-[80%] md:w-[20%] rounded-md p-4">بازگشت به صفحه اصلی</button>
            
            </div>
            <div class=" ml-8  md:ml-18 ">
                <form id="form" wire:submit="submit" method="post" enctype="multipart/form-data">
                    <div class="w-full flex flex-col md:flex-row items-center justify-center mt-10  gap-6">
                        <div class="w-full">
                            <p class="text-white pr-4 ">عنوان</p>
                            <input type="text" wire:model="title" name="title" 
                                class="input input-md border-[2px] border-slate-400 rounded-md p-3 m-5 outline-none w-full text-white placeholder-white "
                                placeholder="چیزی بنویسید...">
                                 @error("title")
                    <p class="text-red-400 text-[16px] px-6 ">{{ $message  }}</p>
                @enderror
                        </div>


                        <div class="w-full ">
                            <p class="text-white pr-4 ">وضعیت</p>

                            <select wire:model="status" name="status"  class="w-full border-[2px] text-white border-slate-400 m-5 p-3 rounded-md">
                                <option value="" class="text-black" >انتخاب وضعیت</option>

                                <option value="0" class="text-black">0</option>
                                <option value="1" class="text-black">1</option>

                            </select>
                             @error("status")
                    <p class="text-red-400 text-[16px] px-6 ">{{ $message  }}</p>
                @enderror
                        </div>

                    </div>
                          <div class="w-full mt-3 ">
                            <p class="text-white pr-4 ">انتخاب دسته بندی</p>

                            <select wire:model="category_id" name="category_id"  class="w-full border-[2px] text-white border-slate-400 m-5 p-3 rounded-md">
                                <option value="" class="text-black" >انتخاب دسته</option>
                                    @foreach ($categories as $category )
                                    <option value="{{ $category->id }}" class="text-black">{{ $category->title }}</option>
                                    @endforeach
                                
                                

                            </select>
                             @error("category_id")
                    <p class="text-red-400 text-[16px] px-6 ">{{ $message  }}</p>
                @enderror
                        </div>
      <div class="w-full flex items-center justify-center mt-3 gap-6">
                        <div class="w-full">
                            <p class="text-white pr-4 ">عکس</p>
                            <input type="file"  wire:model="photo" name="photo"
                                class="input input-md border-[2px] border-slate-400 rounded-md p-3 m-5 outline-none w-full text-white placeholder-white "
                                placeholder="چیزی اپلود کنید...">
                                 @error("photo")
                    <p class="text-red-400 text-[16px] px-6 ">{{ $message  }}</p>
                @enderror
                        </div>


                    </div>
                       <div class="w-full flex items-center justify-center mt-3 gap-6">
                        <div class="w-full">
                            <p class="text-white pr-4 ">توضیحات دسته بندی</p>
                            <textarea type="file"  wire:model="description" name="description"
                                class="input input-md border-[2px] border-slate-400 rounded-md p-3 m-5 outline-none w-full text-white placeholder-white "
                                placeholder="چیزی تایپ کنید..."></textarea>
                                 @error("description")
                    <p class="text-red-400 text-[16px] px-6 ">{{ $message  }}</p>
                @enderror
                        </div>


                    </div>
                <button class="btn bg-red-500  rounded-md p-4 w-full m-4"> ثبت  </button>

                </form>
            </div>
        </div>
    </div>
</div>