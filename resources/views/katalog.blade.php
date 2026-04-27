@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-slate-900 px-4 pt-28 pb-16 text-white">
    <div class="mx-auto max-w-7xl">

       <div class="mb-10">
        <div class="relative">

        <svg
            class="absolute left-6 top-1/2 h-5 w-5 -translate-y-1/2 text-cyan-300"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>

        <input
        id="searchInput"
        type="text"
        placeholder="Cari nama kostum, karakter, atau judul anime..."
        class="w-full rounded-full border text-slate-400 bg-[#071033] px-14 py-5 outline-none placeholder:text-gray-400 focus:border-cyan-300"
        >
    </div>
</div>

        <div class="grid gap-10 lg:grid-cols-[280px_1fr]">

            <aside class="h-fit rounded-2xl border text-slate-400 bg-slate-800 p-7">
                <h2 class="mb-5 text-lg font-bold uppercase tracking-[3px] text-cyan-300">
                    Filter
                </h2>

                <div class="mb-8 h-px bg-slate-600"></div>

                <div class="mb-8">
                    <h3 class="mb-4 font-bold uppercase tracking-[2px] text-cyan-200">
                        Kategori
                    </h3>

                    <div class="space-y-4 text-sm font-bold uppercase tracking-[1px] text-gray-300">
                        <label class="flex items-center gap-3">
                            <input type="checkbox" class="categoryFilter" value="Anime"> Anime
                        </label>
                        <label class="flex items-center gap-3">
                            <input type="checkbox" class="categoryFilter" value="Vtuber"> Vtuber
                        </label>
                        <label class="flex items-center gap-3">
                            <input type="checkbox" class="categoryFilter" value="Game"> Game
                        </label>
                        <label class="flex items-center gap-3">
                            <input type="checkbox" class="categoryFilter" value="Original"> Original
                        </label>
                    </div>
                </div>

                <div>
                    <h3 class="mb-4 font-bold uppercase tracking-[2px] text-cyan-200">
                        Harga Maks / Hari
                    </h3>

                    <input id="priceFilter" type="range" min="50000" max="500000" value="500000" class="w-full">
                    <div class="mt-2 flex justify-between text-sm font-bold">
                        <span class="text-slate-100">Rp50rb</span>
                        <span id="priceText" class="text-cyan-200">Rp500rb</span>
                    </div>
                </div>
            </aside>

            <main>
                <div class="mb-8 flex items-center justify-between">
                    <div>

                        <h1 class="mt-6 text-4xl font-bold md:text-5xl">
                            Katalog <span class="text-pink-400">Kostum</span>
                        </h1>
                    </div>
                </div>

                <div class="grid gap-7 sm:grid-cols-2 xl:grid-cols-4">

                    @foreach ($kostums as $kostum)
                    <div
                    class="kostum-card overflow-hidden rounded-2xl border border-cyan-500/30 bg-slate-800"
                    data-name="{{ strtolower($kostum['nama']) }}"
                    data-category="{{ $kostum['kategori'] }}"
                    data-price="{{ $kostum['harga'] }}"
                    >
                        <div class="relative h-80 bg-white flex items-center justify-center">
                            <img src="{{ url($kostum['gambar']) }}" class="h-full object-contain">

                            <span class="absolute left-4 top-4 bg-pink-400 px-3 py-1 text-xs font-bold rounded-md">
                                {{ $kostum['kategori'] }}
                            </span>
                        </div>

                        <div class="p-5">
                            <h2 class="mb-2 text-lg font-bold text-white">
                                {{ $kostum['nama'] }}
                            </h2>

                            <p class="mt-3 text-lg font-bold text-cyan-400">
                                Rp{{ number_format($kostum['harga'], 0, ',', '.') }} / hari
                            </p>
                        </div>

                    </div>
                    @endforeach
                </div>
            </main>

        </div>
    </div>
</section>
@endsection
