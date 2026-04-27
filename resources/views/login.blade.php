@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-slate-900 px-4 pt-28">

  <div class="w-full max-w-md rounded-2xl bg-[#0b1635] p-8 shadow-lg border border-blue-500/20">

    <div class="text-center">
      <h1 class="text-2xl font-bold text-white">
        Welcome Back
      </h1>
      <p class="mt-3 text-slate-300">
        Login ke akun Nekoya kamu
      </p>
    </div>

    @if(session('error'))
      <div class="mt-5 rounded-lg bg-red-500/10 p-3 text-center text-sm text-red-400">
        {{ session('error') }}
      </div>
    @endif

    <form action="{{ url('/login') }}" method="POST" class="mt-8 space-y-6">
      @csrf

      <div>
        <label class="block text-sm font-medium text-slate-300">
          Email / Username
        </label>
        <input
        type="text"
        name="username"
        required
        value="{{ old('username') }}"
        placeholder="Masukkan email atau username"
        class="mt-2 w-full rounded-lg border border-slate-600 bg-[#070b26] px-5 py-3 text-white outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400"
>
@if(session('username_error'))
<p class="mt-2 text-sm text-red-400">
    {{ session('username_error') }}
</p>
@endif
      </div>

      <div>
        <label class="block text-sm font-medium text-slate-300">
          Password
        </label>

        <div class="relative mt-2">
          <input
          type="password"
          name="password"
          id="password"
          placeholder="Masukkan password"
          class="w-full rounded-lg border border-slate-600 bg-[#070b26] px-5 py-3 pr-12 text-white"
          >
          <button
          type="button"
          id="togglePassword"
          class="absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer text-slate-400 hover:text-cyan-400"
          >
          <svg
          id="eyeIcon"
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
    </button>
</div>
@if(session('password_error'))
  <p class="mt-2 text-sm text-red-400">
    {{ session('password_error') }}
  </p>
@endif

        <div class="mt-3 text-right">
          <a href="#" class="text-sm text-pink-400 hover:underline">
            Forgot password
          </a>
        </div>
      </div>

      <button
  type="submit"
  class="w-full rounded-lg bg-blue-600 py-3 font-semibold text-white transition hover:bg-blue-700"
>
  Log In
</button>
    </form>

    <p class="mt-6 text-center text-slate-300">
      Belum punya akun?
      <a href="{{ url('/register') }}" class="text-cyan-400 hover:underline">
        Daftar
      </a>
    </p>

  </div>
</div>
@endsection
