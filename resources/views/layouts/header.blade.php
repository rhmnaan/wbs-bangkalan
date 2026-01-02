<header class="w-full shadow bg-white sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-6">
        <div class="flex items-center gap-1">
            <img src="logo/logo.png" class="w-10" style="filter: drop-shadow(0 0 3px rgba(0,0,0,.25))">
            <span class="text-5xl font-['Bellefair']" style="text-shadow: 0 0 3px rgba(0,0,0,.25)">
                <span class="text-[#0077BD]">WB</span><span class="text-[#0C1120]">S</span>
            </span>
        </div>

        <nav class="hidden md:flex gap-12 text-[#797979] font-semibold items-center">

            <a href="{{ route('home') }}" class="hover:text-blue-600">Beranda</a>
            <a href="{{ route('home') }}" class="hover:text-blue-600">Tentang WBS</a>

            <details class="relative group">
                <summary class="cursor-pointer hover:text-blue-600 flex items-center gap-1 list-none">
                    Panduan Pelaporan
                        
                    <svg class="w-5 h-5 transition-transform duration-300 ease-in-out group-open:rotate-180"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="3"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>

                <div class="absolute mt-2 bg-white shadow-dropdown rounded-md w-50 p-2 z-50">
                    <a href="{{ route('home') }}" class="block px-3 py-2 rounded hover:bg-gray-100">
                        Kriteria Pelaporan
                    </a>
                    <a href=""{{ route('home') }} class="block px-3 py-2 rounded hover:bg-gray-100">
                        Tata Cara Pelaporan
                    </a>
                </div>
            </details>

        </nav>

        <div class="flex gap-3">
            <a href="{{ route('laporan.create') }}"
            class="px-5 py-2 rounded-full bg-[#0077BD] text-white font-black tracking-wide hover:bg-[#00649F] transition flex items-center gap-2">

                Laporkan Sekarang
                <i data-lucide="mail-warning" class="w-5 h-5 stroke-2"></i>
            </a>
            <a href="{{ route('login') }}" class="px-5 py-2 rounded-full border border-blue-600 text-blue-600 font-manrope font-extrabold hover:bg-blue-600 hover:text-white transition">
                Pantau Laporan
            </a>
        </div>
    </div>
</header>
