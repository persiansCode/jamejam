@push("css")
  <link rel="stylesheet" href="{{ asset("css/first-page/app.css") }}">
@endpush
<div class=" w-[90%] md:w-[50%] m-auto mt-38">
    <x-header.header/>
      <form wire:submit="submit" method="post" class="bg-black/40 p-8 rounded-2xl">

       <div class="flex items-center justify-between">
              <h4 class="text-2xl font-bold mb-6 text-gray-200">فرم ورود</h4>
       <div class="mb-6 hidden md:block">
        <h1 class="text-xl font-bold tracking-widest text-yellow-400">JAM E JAM</h1>
        <p class="text-[12px] text-gray-400 tracking-widest">PHOTOGRAPHY & FILM</p>
      </div>            
      
 
       </div>
       
        <input type="text" placeholder=" ایمیل شما "
          wire:model="email"
          class="w-full bg-black/30 border border-white/20 rounded-2xl px-5 py-4 mb-4 placeholder-gray-300">
              @error("email")
                    <p class="text-red-400 text-[16px] px-6 ">{{ $message  }}</p>
                @enderror
        <input type="tel" dir="rtl" placeholder=" رمز عبور "
          wire:model="password"

          class="w-full bg-black/30 border border-white/20 rounded-2xl px-5 py-4 mb-4 placeholder-gray-300">
              @error("password")
                    <p class="text-red-400 text-[16px] px-6 ">{{ $message  }}</p>
                @enderror
        
            
        <button class="w-full mt-6 bg-red-500 text-black py-4 rounded-2xl font-bold" type="submit"> ثبت نام </button>
       </form>
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
            })
        </script>
    @endpush

</div>