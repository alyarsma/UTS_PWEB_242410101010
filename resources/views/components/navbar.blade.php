<nav class="fixed left-0 top-0 z-50 w-full bg-[#070b26] text-white">
  <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4">

    <a href="{{ url('/') }}" class="flex items-center gap-3">
      <img src="{{ asset('image/Logo Nekoya.png') }}" class="h-12 w-12 rounded-full object-cover">

      <div class="leading-tight">
        <div class="text-xl font-extrabold tracking-[3px] text-white">NEKOYA</div>
        <div class="text-[11px] font-bold uppercase tracking-[2px] text-cyan-300">
          Cosplay Rental
        </div>
      </div>
    </a>

    <ul class="hidden items-center gap-10 font-semibold md:flex">
      <li><a href="{{ url('/') }}"class="{{ request()->is('/') ? 'text-cyan-400 font-bold' : 'hover:text-cyan-400' }}">Beranda</a>
    </li>
      <li>
    <a href="{{ url('/katalog') }}"class="{{ request()->is('katalog') ? 'text-cyan-400 font-bold' : 'hover:text-cyan-400' }}">Katalog</a></li>
      @if(session('is_admin'))
  <li>
    <a href="{{ url('/pengelolaan') }}"
       class="{{ request()->is('pengelolaan') ? 'text-cyan-400 font-bold' : 'hover:text-cyan-400' }}">
       Pengelolaan
    </a>
  </li>
  @endif

      <li>
    <a href="{{ url('/kontak') }}"
       class="{{ request()->is('kontak') ? 'text-cyan-400 font-bold' : 'hover:text-cyan-400' }}">
       Kontak
    </a>
  </li>

      @if(session('is_admin'))
        <li class="relative">
          <button id="profile-btn-desktop" type="button">
            <img src="{{ asset('image/atmin.jpg') }}"
              class="h-11 w-11 rounded-full border-2 border-cyan-400 object-cover">
          </button>
        </li>
      @else
        <li>
          <a href="{{ url('/login') }}" class="rounded-lg bg-blue-600 px-5 py-3 hover:bg-blue-700">
            Login
          </a>
        </li>
      @endif
    </ul>

    <div class="flex items-center gap-4 md:hidden">
      @if(session('is_admin'))
        <button id="profile-btn-mobile" type="button">
          <img src="{{ asset('image/atmin.jpg') }}"
            class="h-11 w-11 rounded-full border-2 border-cyan-400 object-cover">
        </button>
      @endif

      <button id="menu-btn" class="text-4xl text-cyan-400">
        ☰
      </button>
    </div>

    @if(session('is_admin'))
      <div id="profile-menu"
        class="absolute right-4 top-20 hidden w-44 rounded-xl border border-blue-500/20 bg-[#0b1635] p-3 shadow-lg">
        <a href="{{ url('/profile?username=' . session('username')) }}" class="block rounded-lg px-4 py-2 hover:bg-white/10">
          Profile
        </a>

        <form action="{{ url('/logout') }}" method="POST">
          @csrf
          <button type="submit" class="w-full rounded-lg px-4 py-2 text-left text-red-400 hover:bg-white/10">
            Logout
          </button>
        </form>
      </div>
    @endif

  </div>

  <ul id="menu"
    class="fixed left-0 top-20 z-40 flex max-h-0 w-full flex-col gap-4 overflow-hidden bg-[#080b28] px-6 font-semibold transition-all duration-500 ease-in-out md:hidden">
    <li>
  <a href="{{ url('/') }}"
     class="block py-3 {{ request()->is('/') ? 'text-cyan-400 font-bold' : 'hover:text-cyan-400' }}">
     Beranda
  </a>
</li>

<li>
  <a href="{{ url('/katalog') }}"
     class="block py-3 {{ request()->is('katalog') ? 'text-cyan-400 font-bold' : 'hover:text-cyan-400' }}">
     Katalog
  </a>
</li>

    @if(session('is_admin'))
      <li>
        <a href="{{ url('/pengelolaan') }}"
           class="block py-3 {{ request()->is('pengelolaan') ? 'text-cyan-400 font-bold' : 'hover:text-cyan-400' }}">
           Pengelolaan
        </a>
      </li>
    @endif

    <li>
      <a href="{{ url('/kontak') }}"
         class="block py-3 {{ request()->is('kontak') ? 'text-cyan-400 font-bold' : 'hover:text-cyan-400' }}">
         Kontak
      </a>
    </li>

    @if(!session('is_admin'))
      <li>
        <a href="{{ url('/login') }}" class="block rounded-lg bg-blue-600 px-5 py-3 text-white hover:bg-blue-700">
          Login
        </a>
      </li>
    @endif
  </ul>
</nav>
