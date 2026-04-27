@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-900 px-6 pt-28 pb-16 text-white">

  <div class="mx-auto grid max-w-6xl grid-cols-1 gap-8 md:grid-cols-4">

    <aside class="self-start rounded-xl border border-blue-500/20 bg-slate-800 shadow-lg">
      <h2 class="border-b border-blue-500/20 px-5 py-4 font-semibold text-slate-200">
        Navigation
      </h2>

      <div class="space-y-1 py-3">
        <a href="#"
          class="block border-l-4 border-cyan-400 bg-cyan-400/10 px-5 py-3 font-medium text-cyan-300">
          Data Akun Admin
        </a>

        <a href="#"
          class="block border-l-4 border-transparent px-5 py-3 text-slate-400 hover:bg-white/5 hover:text-white">
          Data Akun Pelanggan
        </a>
      </div>
    </aside>

    <section class="md:col-span-3 rounded-xl border border-blue-500/20 bg-slate-800 shadow-lg">

      <div class="flex items-center justify-between border-b border-blue-500/20 px-6 py-4">
        <h2 class="text-lg font-semibold text-white">Account Settings</h2>

        <button class="rounded-lg border border-cyan-400 px-4 py-2 text-sm text-cyan-300 hover:bg-cyan-400/10">
          Edit Profil
        </button>
      </div>

      <div class="space-y-6 px-8 py-8">

        <div>
          <label class="mb-2 block text-sm text-slate-300">Username</label>
          <input
            type="text"
            value="{{ $username ?? session('username', 'admin') }}"
            class="w-full rounded-lg border border-slate-600 bg-slate-900 px-5 py-3 text-white outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400"
          >
        </div>

        <div>
          <label class="mb-2 block text-sm text-slate-300">Password</label>
          <input
            type="password"
            value="admin123"
            class="w-full rounded-lg border border-slate-600 bg-slate-900 px-5 py-3 text-white outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400"
          >
        </div>

        <div>
          <label class="mb-2 block text-sm text-slate-300">Nama Lengkap</label>
          <input
            type="text"
            value="Admin Nekoya"
            class="w-full rounded-lg border border-slate-600 bg-slate-900 px-5 py-3 text-white outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400"
          >
        </div>

        <div>
          <label class="mb-2 block text-sm text-slate-300">Phone Number</label>
          <input
            type="text"
            value="08123456789"
            class="w-full rounded-lg border border-slate-600 bg-slate-900 px-5 py-3 text-white outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400"
          >
        </div>

        <div class="flex items-center justify-between pt-4">

          <form action="{{ url('/logout') }}" method="POST">
             @csrf
             <button type="submit"
             class="rounded-lg bg-red-600 px-5 py-2 text-sm font-semibold hover:bg-red-700">
             Logout
            </button>
        </form>

          <button
            type="button"
            class="rounded-full bg-green-500 px-8 py-3 text-sm font-semibold text-white hover:bg-green-600">
            Save Changes
          </button>

        </div>

      </div>
    </section>

  </div>
</div>
@endsection
