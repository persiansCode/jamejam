@push("css")
  <link rel="stylesheet" href="{{ asset("css/first-page/app.css") }}">
@endpush
<div>
 <x-header.header/>

  <!-- Hero -->
  <section id="home"
    class="hero-bg h-screen bg-cover bg-center pt-18 flex items-center justify-center text-center relative">
    <div class="absolute inset-0 bg-black/70"></div>
    <div class="relative z-10 px-6 max-w-4xl">
      <p class="text-yellow-400 tracking-widest mb-4">JameJam Studio - Gorgan</p>
      <h2 class="text-5xl md:text-7xl font-black leading-tight mb-6 text-slate-200 ">ثبت خاص‌ترین<br>لحظه‌های زندگی</h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto text-slate-200 ">آتلیه تخصصی عکاسی و فیلمبرداری در
        گرگان با سبک سینمایی، لوکس و حرفه‌ای</p>

      <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
        <a href="https://wa.me/989111773908"
          class="bg-yellow-400 text-black px-8 py-4 rounded-full font-bold text-lg hover:scale-105 transition">رزرو و
          مشاوره</a>
        <a href="#portfolio"
          class="border border-white/30 px-8 py-4 rounded-full hover:bg-white hover:text-black transition text-slate-200">مشاهده
          نمونه کار</a>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="py-24 px-6 bg-[#0a0a0a]">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-16">
        <p class="text-yellow-400 tracking-widest text-sm mb-3">SERVICES</p>
        <h3 class="text-4xl md:text-5xl text-gray-100 font-bold">خدمات حرفه‌ای جام جم</h3>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="border border-white/10 bg-white/5 rounded-3xl p-8 text-gray-300 hover:border-yellow-400 transition">
          عکاسی عروسی</div>
        <div class="border border-white/10 bg-white/5 rounded-3xl p-8 text-gray-300 hover:border-yellow-400 transition">
          فیلمبرداری مراسم</div>
        <div class="border border-white/10 bg-white/5 rounded-3xl p-8 text-gray-300 hover:border-yellow-400 transition">
          فرمالیته</div>
        <div class="border border-white/10 bg-white/5 rounded-3xl p-8 text-gray-300 hover:border-yellow-400 transition">
          عکاسی تولد</div>
        <div class="border border-white/10 bg-white/5 rounded-3xl p-8 text-gray-300 hover:border-yellow-400 transition">
          عکاسی بارداری</div>
        <div class="border border-white/10 bg-white/5 rounded-3xl p-8 text-gray-300 hover:border-yellow-400 transition">
          عکاسی کودک</div>
        <div class="border border-white/10 bg-white/5 rounded-3xl p-8 text-gray-300 hover:border-yellow-400 transition">
          فشن و مدلینگ</div>
        <div class="border border-white/10 bg-white/5 rounded-3xl p-8 text-gray-300 hover:border-yellow-400 transition">
          صنعتی و تبلیغاتی</div>
        <div class="border border-white/10 bg-white/5 rounded-3xl p-8 text-gray-300 hover:border-yellow-400 transition">
          تولید محتوا</div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section id="portfolio" class="py-24 px-6">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-16">
        <p class="text-yellow-400 tracking-widest text-sm mb-3">PORTFOLIO</p>
        <h3 class="text-4xl md:text-5xl font-bold text-slate-200">بخشی از نمونه کارها</h3>
      </div>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="relative overflow-hidden rounded-3xl h-96 group">
          <img src={{ asset("photo/1.jpg") }}
            class="w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="عروسی">
          <div class="absolute bottom-8 right-8 text-3xl font-bold text-gray-200">عروسی</div>
        </div>
        <div class="relative overflow-hidden rounded-3xl h-96 group">
          <img src={{ asset("photo/2.jpg") }}
            class="w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="فشن">
          <div class="absolute bottom-8 right-8 text-3xl font-bold text-gray-200">فشن</div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="py-24 px-6 bg-[#0d0d0d]">
    <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
      <img src={{ asset("photo/3.jpg") }} class="rounded-3xl" alt="استودیو">
      <div>
        <p class="text-yellow-400 tracking-widest text-sm mb-4">ABOUT US</p>
        <h3 class="text-4xl md:text-5xl font-bold leading-tight mb-8 text-gray-200">تجربه‌ای متفاوت از عکاسی و
          فیلمبرداری</h3>
        <p class="text-gray-400 text-lg leading-relaxed">جام جم با تمرکز بر کیفیت، احساس و ثبت لحظه‌های خاص، تجربه‌ای
          لوکس و حرفه‌ای برای شما خلق می‌کند.</p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-24 px-6 text-center">
    <h3 class="text-4xl md:text-6xl font-black leading-tight mb-8 text-slate-200">آماده ثبت بهترین لحظه‌های زندگی هستید؟
    </h3>
    <a href="https://wa.me/989111773908"
      class="inline-block bg-yellow-400 text-black px-10 py-5 rounded-full font-bold text-xl hover:scale-105 transition">شروع
      رزرو</a>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-24 px-6 bg-[#0a0a0a]">
    <div class="max-w-6xl mx-auto grid grid-cols-1  lg:grid-cols-2 gap-12">
      <div>
        <h3 class="text-4xl font-bold mb-8 text-gray-200">ارتباط با جام جم</h3>
        <div class="space-y-6">
          <div class="bg-white/5 border border-white/10 rounded-3xl p-6 flex items-center gap-2 ">
            <i class="fa-brands fa-whatsapp text-[20px] text-green-400"></i>
            <p class="text-gray-200">واتساپ و تماس</p>
            <p class="text-2xl font-bold text-gray-400" dir="ltr">0911 177 3908</p>
          </div>
          <div class="bg-white/5 border border-white/10 rounded-3xl p-6 flex items-center gap-2">
            <i class="fa-brands fa-instagram text-[20px] text-pink-400"></i>

            <p class="text-gray-200">اینستاگرام</p>
            <p class="text-2xl font-bold text-gray-400">@gorgan_jamejam</p>
          </div>
        </div>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-3xl p-8">
        <form wire:submit="submit" method="post">

       
        <h4 class="text-2xl font-bold mb-6 text-gray-200">فرم مشاوره</h4>
        <input type="text" placeholder="نام کامل شما"
          wire:model="full_name"
          class="w-full bg-black/50 border border-white/20 rounded-2xl px-5 py-4 mb-4 placeholder-gray-300">
              @error("full_name")
                    <p class="text-red-400 text-[16px] px-6 ">{{ $message  }}</p>
                @enderror
        <input type="tel" dir="rtl" placeholder="شماره تماس"
          wire:model="phone"

          class="w-full bg-black/50 border border-white/20 rounded-2xl px-5 py-4 mb-4 placeholder-gray-300">
              @error("phone")
                    <p class="text-red-400 text-[16px] px-6 ">{{ $message  }}</p>
                @enderror
        <textarea placeholder="توضیحات پروژه یا مراسم" rows="5"
          wire:model="description"

          class="w-full bg-black/50 border border-white/20 rounded-2xl px-5 py-4 placeholder-gray-300"></textarea>
              @error("description")
                    <p class="text-red-400 text-[16px] px-6 ">{{ $message  }}</p>
                @enderror
        <button class="w-full mt-6 bg-yellow-400 text-black py-4 rounded-2xl font-bold" type="submit">ارسال درخواست</button>
       </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="border-t border-white/10 py-12 text-center text-gray-500">
    <h4 class="text-3xl font-black text-yellow-400 mb-3">JAM E JAM</h4>
    <p>Photography & Cinematic Filmmaking Studio - گرگان</p>
    <p class="mt-4">© 2026 JameJam Studio — تمامی حقوق محفوظ است.</p>


  </footer>
  @push('script')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
              
            Livewire.on("create_consultation", () => {
                Swal.fire({
                    title: ' موفقیت ',
                    text: 'فرم مشاوره شما با موفقیت به سرور ارسال شد',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                });
            })})
        </script>
    @endpush

</div>