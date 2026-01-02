@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="relative bg-[#F7F9FB] min-h-screen flex items-center">

    
    {{-- BACKGROUND IMAGE ATAS --}}
    <div
        class="absolute inset-0 bg-no-repeat z-0 bg-fade"
        style="
            background-image: url('{{ asset('background/hero.png') }}');
            background-size: 100%;
            background-position: center -50px;
        ">
    </div>

    {{-- BACKGROUND IMAGE BAWAH --}}
    <div
        class="absolute inset-0 bg-no-repeat z-10 bg-fade"
        style="
            background-image: url('{{ asset('background/Rectangle.png') }}');
            background-size: 100%;
            background-position: center bottom;
        ">
    </div>

    {{-- CONTENT --}}
    <div class="relative z-10 max-w-7xl pl-34 mb-64">

        <div class="max-w-xl">
            <h1 class="hero-animate text-5xl text-[#020B22] font-extrabold mb-3 font-[Inter]">
                WBS BANGKALAN
            </h1>

            <p class="hero-animate text-gray-500 mb-2 text-2xl font-bold">Whistleblowing System</p>

            <p class="hero-animate text-gray-600 mb-6">
                Platform resmi pelaporan pelanggaran yang aman dan rahasia. Kami menjamin perlindungan identitas Anda demi mewujudkan pemerintahan Bangkalan yang bersih.
            </p>
        </div>

    </div>
</section>


{{-- APA ITU WBS --}}
<section class="py-16">
    <div class="max-w-7xl pl-34">

        <h2
            class="text-[40px] font-extrabold mb-4 animate-left"
        >
            Apa Itu <span class="text-[#0077BD]">WBS?</span>
        </h2>

        <p
            class="text-gray-600 leading-relaxed animate-bottom"
        >
            WBS adalah mekanisme penyampaian pengaduan dugaan tindak pidana tertentu yang telah terjadi atau akan terjadi yang melibatkan pegawai dan orang lain yang yang dilakukan dalam organisasi tempatnya bekerja, dimana pelapor bukan merupakan bagian dari pelaku kejahatan yang dilaporkannya.
            <br><br>
            Di dalam instansi pemerintah, dari kelima unsur sistem pengendalian intern yang tercantum dalam PP Nomor 60 Tahun 2008 tentang Sistem 
            Pengendalian Intern Pemerintah, aktivitas Lingkungan Pengendalian merupakan prosedur yang dilaksanakan dalam meminimalisir terjadinya kecurangan. Salah satu cara yang efektif dari pengendalian terhadap kecurangan tersebut adalah informasi dari pegawai, pejabat maupun masyarakat pengguna yang mengetahui informasi perbuatan yang terindikasi pelanggaran.
        </p>

    </div>
</section>



{{-- KRITERIA --}}
<section class="px-10 py-16 bg-gray-50">
    <h2 class="text-center text-3xl font-extrabold mb-6 font-[Inter]">
        KRITERIA <span class="text-blue-600">PELAPORAN</span>
    </h2>

    <p class="text-gray-600 text-center mb-8 px-20 mx-auto">
        Jika Anda melihat atau mengetahui dugaan Tindak Pidana Korupsi atau bentuk pelanggaran lainnya yang dilakukan pegawai Pemerintah Kabupaten Bangkalan, silakan melapor ke Inspektorat Pemerintah Kabupaten Bangkalan. Jika laporan anda memenuhi syarat/kriteria, maka laporan Anda akan diproses lebih lanjut.
        <br><br>
        Pengaduan Anda akan mudah ditindaklanjuti apabila memenuhi unsur sebagai berikut:
    </p>

    @php
        $kriteria = [
            [
                'title' => 'WHAT',
                'image' => 'icons/what.png',
                'desc'  => 'Apa perbuatan berindikasi Tindak Pidana Korupsi/pelanggaran yang diketahui'
            ],
            [
                'title' => 'WHO',
                'image' => 'icons/who.png',
                'desc'  => 'Siapa yang bertanggungjawab/terlibat dan terkait dalam perbuatan tersebut'
            ],
            [
                'title' => 'WHERE',
                'image' => 'icons/where.png',
                'desc'  => 'Dimana tempat terjadinya perbuatan tersebut dilakukan'
            ],
            [
                'title' => 'WHEN',
                'image' => 'icons/when.png',
                'desc'  => 'Kapan waktu perbuatan pelanggaran tersebut dilakukan'
            ],
            [
                'title' => 'HOW',
                'image' => 'icons/how.png',
                'desc'  => 'Bagaimana cara perbuatan tersebut dilakukan (modus, cara, dan sebagainya)'
            ],
            [
                'title' => 'EVIDENCE',
                'image' => 'icons/evidence.png',
                'desc'  => 'Dilengkapi bukti permulaan (dokumen / gambar / rekaman) yang mendukung'
            ],
        ];
    @endphp

    <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto place-items-center">
        @foreach ($kriteria as $item)
            <div
                class="
                    relative
                    w-[250px] h-[170px]
                    p-2
                    bg-white
                    rounded-xl
                    text-center
                    shadow-sm
                    hover:shadow-md
                    transition
                "
            >
                {{-- ANGKA --}}
                <div
                    class="
                        absolute top-0.5 left-3
                        text-[#0DA1EB]
                        text-[40px]
                        font-bold
                        flex items-center justify-center
                    "
                >
                    {{ $loop->iteration }}
                </div>

                {{-- GAMBAR --}}
                <img
                    src="{{ asset($item['image']) }}"
                    alt="{{ $item['title'] }}"
                    class="w-14 h-14 mx-auto mb-2 mt-1"
                >

                {{-- JUDUL --}}
                <h4 class="font-extrabold text-base text-[#020B22]">
                    {{ $item['title'] }}
                </h4>

                {{-- DESKRIPSI --}}
                <p
                    class="
                        text-gray-500 text-sm leading-tight px-2
                        {{ in_array($item['title'], ['WHERE','WHEN']) ? 'mt-2' : 'mt-1' }}
                    "
                >
                    {{ $item['desc'] }}
                </p>

            </div>
        @endforeach
    </div>
    <p class="text-gray-600 text-center mx-26 mt-10">
        Anda tidak perlu khawatir terungkapnya identitas diri anda karena Pemerintah Kabupaten Bangkalan akan MERAHASIAKAN & MELINDUNGI Identitas Anda sebagai whistleblower. Pemerintah Kabupaten Bangkalan sangat menghargai informasi yang Anda laporkan. Fokus kami kepada materi informasi yang Anda Laporkan. Sebagai bentuk terimakasih kami terhadap laporan yang Anda kirim, kami berkomitmen untuk merespon laporan Anda selambat-lambatnya 7 (tujuh) hari kerja sejak laporan Anda dikirim.
    </p>
</section>




{{-- TATA CARA --}}
<section class=" py-16">
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
<section class="max-w-8xl mx-auto px-6 py-20 bg-gray-50">
    <h2 class="text-center text-3xl font-bold mb-10">
        STATISTIK <span class="text-blue-600">PENGADUAN</span>
    </h2>

    <div class="flex justify-center">
        {{-- Bisa diganti chart JS --}}
        <img src="/chart.png" class="w-72">
    </div>
</section>

@endsection
