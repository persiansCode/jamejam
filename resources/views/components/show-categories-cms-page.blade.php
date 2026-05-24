@push("css")
    <link rel="stylesheet" href="{{ asset("css/cms/show-categories/app.css") }}">
@endpush

<div>
    <x-header.header />
    <div class="grid grid-cols-12">

        <div class="col-span-12 md:col-span-2">

            <x-cms.sidebar />
            <x-cms.sidebar-items :categories="null" :items="null" />


        </div>
        <div class="col-span-12 md:col-span-10 pb-14">
            <div class="  flex flex-col md:flex-row  w-full items-center justify-around mt-38 p-[25px] gap-6 ">
                <a class="btn bg-yellow-400 text-center rounded-md p-3 text-sm  w-[80%] md:w-[20%]"
                    wire:click="setCategory({{ $categories->first()->id }})"
                    href="{{ route('cms.create-categories') }}"> ساخت دسته بندی </a>

                <div
                    class="border-[2px] border-slate-200 rounded-md p-2 text-sm  flex justify-between w-[80%] md:w-[20%] items-center ml-0 md:ml-18 ">
                    <i class="fas fa-search text-white"></i>
                    <input type="text" placeholder="جست و جو بین دسته بندی ها " class="mr-3 outline-none text-white">
                </div>
            </div>
            <!-- جدول با اسکرول افقی فقط در صورت نیاز -->
            <div class="ml-18 w-[95%] p-5 mx-8 overflow-x-auto custom-scroll">
                <div class="min-w-[600px]">
                    <table class="text-white mt-24 text-center bg-slate-700 custom-table rounded-sm w-full">
                        <thead>
                            <tr>
                                <th class="p-3">#</th>
                                <th class="p-3">اسم دسته بندی</th>
                                <th class="p-3">عکس</th>
                                <th class="p-3">وضعیت</th>
                                <th class="p-3">تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="border-b border-gray-600">
                                    <td class="p-3">{{ $category->id }}</td>
                                    <td class="p-3">{{ $category->title }}</td>
                                    <td class="p-3">
                                        <div class="flex justify-center">
                                            <img src="{{ asset($category->image['indexArray']['small'] ?? 'images/default.jpg') }}"
                                                class="rounded-md w-[50px] h-[50px] object-cover" alt="">
                                        </div>
                                    </td>
                                    <td class="p-3">
                                        
                                        <x-cms.check-box :itemId="$category->id" :checked="$category->status"
                                            componentName="show-categories-cms-page" />
                                    </td>
                                    <td class="p-3" wire:key="category-{{ $category->id }}">
                                        <div class="flex justify-center">
                                            <button wire:click="deleteItem({{ $category->id }})"
                                                class="bg-red-500 rounded-md p-2 flex justify-center items-center gap-1">
                                                <i class="fas fa-times text-sm"></i>
                                                <span class="text-sm">حذف</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="">
                {{ $categories->withQueryString()->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
    @push('script')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                @if(session()->has('swal_title'))



                    Swal.fire({
                        title: @json(session('swal_title')),
                        text: @json(session('swal_text')),
                        icon: @json(session('swal_icon')),
                    });


                @endif
                });

            Livewire.on("show-delete-swal", () => {
                Swal.fire({
                    title: 'حذف شد!',
                    text: 'آیتم با موفقیت حذف گردید',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                });
            })
        </script>
    @endpush

</div>