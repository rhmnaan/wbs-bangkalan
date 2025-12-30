@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="max-w-7xl mx-auto grid md:grid-cols-2 gap-8 px-6 py-16">

    <div>
        <h1 class="text-4xl font-bold mb-3">WBS BANGKALAN</h1>
        <p class="text-gray-500 mb-2 text-lg">Whistleblowing System</p>
        <p class="text-gray-600 mb-6">
            Platform resmi pelaporan pelanggaran yang aman dan rahasia…
        </p>

        <a href="#" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            Laporkan Sekarang
        </a>
    </div>

    <div>
        {{-- Taruh gambar ilustrasi hero kamu di sini --}}
        <img src="/hero.png">
    </div>

</section>


{{-- APA ITU WBS --}}
<section class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-4">Apa Itu <span class="text-blue-600">WBS?</span></h2>

        <p class="text-gray-600 leading-relaxed">
            WBS adalah mekanisme penyampaian pengaduan dugaan tindak pidana…
        </p>
    </div>
</section>


{{-- KRITERIA --}}
<section class="max-w-7xl mx-auto px-6 py-16">
    <h2 class="text-center text-3xl font-bold mb-10">
        KRITERIA <span class="text-blue-600">PELAPORAN</span>
    </h2>

    <div class="grid md:grid-cols-3 lg:grid-cols-6 gap-6">
        @foreach (['WHAT','WHO','WHERE','WHEN','HOW','EVIDENCE'] as $item)
        <div class="p-5 border rounded-xl text-center shadow-sm">
            <h4 class="font-bold mb-2">{{ $item }}</h4>
            <p class="text-gray-500 text-sm">Deskripsi singkat...</p>
        </div>
        @endforeach
    </div>
</section>


{{-- TATA CARA --}}
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-center text-3xl font-bold mb-10">
            TATA CARA <span class="text-blue-600">PELAPORAN</span>
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            <img src="/steps.png">

            <ol class="space-y-4">
                <li class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center">1</span>
                    Periksa Kelengkapan Laporan
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center">2</span>
                    Isi Laporan Pengaduan
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center">3</span>
                    Simpan & jaga kerahasiaan akun
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center">4</span>
                    Pantau Pengaduan
                </li>
            </ol>
        </div>
    </div>
</section>


{{-- STATISTIK --}}
<section class="max-w-6xl mx-auto px-6 py-20">
    <h2 class="text-center text-3xl font-bold mb-10">
        STATISTIK <span class="text-blue-600">PENGADUAN</span>
    </h2>

    <div class="flex justify-center">
        {{-- Bisa diganti chart JS --}}
        <img src="/chart.png" class="w-72">
    </div>
</section>

@endsection
