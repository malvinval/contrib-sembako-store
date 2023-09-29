<div class="navbar bg-base-100">
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          {{-- small screen navlinks --}}
            <li>
                <a href="/home" class="text-white-600 hover:text-green_button font-medium ">Menu</a>
            </li>
            <li>
                <a href="/belanja" class="text-white-600 hover:text-green_button font-medium">Belanja Sekarang</a>
            </li>
            <li>
                <a href="/tentang_kami" class="text-white-600 hover:text-green_button font-medium">Tentang Kami</a>
            </li>
            <li>
                <a href="/katalog" class="text-white-600 hover:text-green_button font-medium">Katalog</a>
            </li>
            <li>
                <a href="/berita" class="text-white-600 hover:text-green_button font-medium">Berita</a>
            </li>
          
        </ul>
      </div>
      {{-- sembako store logo --}}
      <img src="{{ asset('images/logo_sembako.png') }}" alt="logo-sembako" class="w-100">
    </div>

    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        {{-- large screen navlinks --}}
        <li>
            <a href="/home" class="text-white-600 hover:text-green_button font-medium ">Menu</a>
        </li>
        <li>
            <a href="/belanja" class="text-white-600 hover:text-green_button font-medium">Belanja Sekarang</a>
        </li>
        <li>
            <a href="/tentang_kami" class="text-white-600 hover:text-green_button font-medium">Tentang Kami</a>
        </li>
        <li>
            <a href="/katalog" class="text-white-600 hover:text-green_button font-medium">Katalog</a>
        </li>
        <li>
            <a href="/berita" class="text-white-600 hover:text-green_button font-medium">Berita</a>
        </li>
      </ul>
    </div>
    <div class="navbar-end">
      <a href="/login" class="btn btn-info text-white">Login</a>
    </div>
</div>