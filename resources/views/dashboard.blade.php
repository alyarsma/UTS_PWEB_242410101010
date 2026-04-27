@extends('layouts.app')

@section('content')
<main class="bg-slate-950 text-white">

  <section class="pt-20 pb-0 px-6">
    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-10 md:grid-cols-2">

      <div>
        <p class="mb-4 text-sm font-semibold uppercase tracking-widest text-cyan-300">
          Nekoya Cosplay Rental
        </p>

        <h1 class="text-4xl font-extrabold leading-tight sm:text-5xl md:text-6xl">
          Wear your <span class="text-pink-400">favorite character</span>
        </h1>

        <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-300">
          Sewa kostum anime, Vtuber, dan karakter game untuk event, photoshoot,
          cosplay gathering, atau kebutuhan kontenmu.
        </p>

      </div>

      <div class="
      flex justify-end items-end h-full overflow-hidden">
    <img src="{{ asset('image/furina.png') }}" alt="Furina"
    class="h-full w-auto object-contain"
>
</div>

    </div>
  </section>

  <section class="px-6 py-14 bg-slate-900">
    <div class="mx-auto max-w-7xl">
      <div class="mb-8 flex items-center justify-between">
        <h2 class="text-2xl font-bold">Collections</h2>
        <a href="{{ session('is_admin') ? route('katalog') : route('login') }}"
           class="text-white transition duration-300 hover:text-cyan-400 active:text-pink-400"
        >
          See All
        </a>
      </div>

      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <div class="rounded-xl bg-slate-800 p-5">
          <img
  src="{{ asset('image/anime.jpg') }}"
  class="mb-4 h-40 w-full object-cover rounded-lg"
/>
          <h3 class="text-lg font-bold">Anime</h3>
          <p class="mt-1 text-sm text-slate-400">Kostum karakter anime populer.</p>
        </div>

        <div class="rounded-xl bg-slate-800 p-5">
          <img
  src="{{ asset('image/vtuber.jpg') }}"
  class="mb-4 h-40 w-full object-cover rounded-lg"
/>
          <h3 class="text-lg font-bold">Vtuber</h3>
          <p class="mt-1 text-sm text-slate-400">Outfit karakter Vtuber favorit.</p>
        </div>

        <div class="rounded-xl bg-slate-800 p-5">
          <img
  src="{{ asset('image/game.jpg') }}"
  class="mb-4 h-40 w-full object-cover rounded-lg"
/>
          <h3 class="text-lg font-bold">Game</h3>
          <p class="mt-1 text-sm text-slate-400">Cosplay karakter game populer.</p>
        </div>

        <div class="rounded-xl bg-slate-800 p-5">
          <img
  src="{{ asset('image/accessoris.jpg') }}"
  class="mb-4 h-40 w-full object-cover rounded-lg"
/>
          <h3 class="text-lg font-bold">Accessories</h3>
          <p class="mt-1 text-sm text-slate-400">Wig, properti, dan aksesoris.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="px-6 py-14">
    <div class="mx-auto max-w-7xl">
      <div class="mb-8">
        <h2 class="text-2xl font-bold">New Arrivals</h2>
        <p class="mt-2 text-slate-400">Kostum terbaru yang siap disewa.</p>
      </div>

      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

    <div class="overflow-hidden rounded-2xl border border-blue-500/30 bg-[#0b1635]">

  <div class="h-80 bg-white">
    <img
      src="{{ asset('image/gojo satoru.jpg') }}"
      class="h-full w-full object-contain"
    >
  </div>

  <div class="p-5">
    <h3 class="font-bold text-white">Gojo Satoru</h3>
    <p class="mt-1 text-sm text-slate-400">Anime • Premium</p>
    <p class="mt-3 font-semibold text-cyan-300">
      Rp100.000 / hari
    </p>
  </div>

</div>

       <div class="overflow-hidden rounded-2xl border border-blue-500/30 bg-[#0b1635]">

  <div class="h-80 bg-white">
    <img
      src="{{ asset('image/furina kostum.jpg') }}"
      class="h-full w-full object-contain"
    >
  </div>

  <div class="p-5">
    <h3 class="font-bold text-white">Furina Outfit</h3>
    <p class="mt-1 text-sm text-slate-400">Game • Premium</p>
    <p class="mt-3 font-semibold text-cyan-300">
      Rp180.000 / hari
    </p>
  </div>

</div>

        <div class="overflow-hidden rounded-2xl border border-blue-500/30 bg-[#0b1635]">

  <div class="h-80 bg-white">
    <img
      src="{{ asset('image/hatsune miku.jpg') }}"
      class="h-full w-full object-contain"
    >
  </div>

  <div class="p-5">
    <h3 class="font-bold text-white">Hatsune Miku</h3>
    <p class="mt-1 text-sm text-slate-400">Vtuber • Premium</p>
    <p class="mt-3 font-semibold text-cyan-300">
      Rp160.000 / hari
    </p>
  </div>

</div>


      </div>
    </div>
  </section>

  <section class="px-6 py-14 bg-slate-900">
  <div class="mx-auto max-w-7xl">
    <h2 class="mb-8 text-2xl font-bold">FAQ</h2>

    <div class="space-y-4">

      <div class="faq-item bg-slate-800 rounded-lg">
        <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left">
          <span>Apa itu Nekoya?</span>
          <span class="faq-icon text-2xl transition-transform duration-300">+</span>
        </button>
        <div class="faq-content hidden px-6 pt-5 pb-5 mt-2 border-t border-white/10 text-slate-400">
          Nekoya adalah platform rental kostum cosplay anime, vtuber, dan game.
        </div>
      </div>

      <div class="faq-item bg-slate-800 rounded-lg">
        <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left">
          <span>Berapa harga sewa kostum?</span>
          <span class="faq-icon text-2xl transition-transform duration-300">+</span>
        </button>
        <div class="faq-content hidden px-6 pt-5 pb-5 mt-2 border-t border-white/10 text-slate-400">
          Harga mulai dari Rp100.000 tergantung jenis dan kualitas kostum.
        </div>
      </div>

      <div class="faq-item bg-slate-800 rounded-lg">
        <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left">
          <span>Apakah bisa kirim ke luar kota?</span>
          <span class="faq-icon text-2xl transition-transform duration-300">+</span>
        </button>
        <div class="faq-content hidden px-6 pt-5 pb-5 mt-2 border-t border-white/10 text-slate-400">
          Bisa, kami melayani pengiriman ke seluruh Indonesia.
        </div>
      </div>

      <div class="faq-item bg-slate-800 rounded-lg">
        <button class="faq-btn w-full flex justify-between items-center px-6 py-5 text-left">
          <span>Bagaimana cara sewa?</span>
          <span class="faq-icon text-2xl transition-transform duration-300">+</span>
        </button>
        <div class="faq-content hidden px-6 pt-5 pb-5 mt-2 border-t border-white/10 text-slate-400">
          Pilih kostum → konfirmasi admin → bayar → kostum dikirim / diambil.
        </div>
      </div>

    </div>
  </div>
</section>

</main>
@endsection
