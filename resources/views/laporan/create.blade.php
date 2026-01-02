@extends('layouts.app')

@section('content')

<div class="bg-white">
    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto px-6 py-14">
        <h1 class="text-3xl font-extrabold mb-4">
            Buat <span class="text-[#0077BD]">Laporan</span>
        </h1>

        <p class="text-gray-700 leading-relaxed max-w-4xl">
            Anda tidak perlu khawatir terhadap terungkapnya identitas diri Anda. Pemerintah Kabupaten Bangkalan menjamin
            <span class="text-red-600 font-semibold">KERAHASIAAN dan PERLINDUNGAN</span> identitas Anda sebagai whistleblower.
            Pemerintah Kabupaten Bangkalan sangat menghargai setiap informasi yang Anda laporkan.
            Fokus kami sepenuhnya tertuju pada substansi dan kebenaran informasi yang Anda sampaikan.
            Sebagai bentuk komitmen dan tanggung jawab kami, setiap laporan akan ditindaklanjuti dan direspons paling lambat
            7 (tujuh) hari kerja sejak laporan diterima.
        </p>

        <p class="mt-6 text-gray-700">
            Silahkan pilih tingkat pengungkapan, terkait dengan perincian identitas pribadi Anda
        </p>

        <!-- PILIHAN -->
        <div class="grid md:grid-cols-2 gap-10 mt-10">
            <!-- ANONIM -->
            <a href="#"
               class="w-[400px] h-[154px] bg-[#D9D9D9] rounded-2xl p-6 flex gap-5
                      shadow-[0_6px_14px_rgba(0,0,0,0.18)]
                      hover:shadow-[0_10px_24px_rgba(0,0,0,0.22)]
                      transition">

                <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center
                            shadow-[0_4px_10px_rgba(0,0,0,0.2)]">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-7 h-7 text-gray-800"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0zM5.121 17.804A9 9 0 1118.364 4.56" />
                    </svg>
                </div>

                <div>
                    <h3 class="text-2xl font-extrabold text-black mb-1">
                        Anonim
                    </h3>
                    <p class="text-base text-gray-800 leading-relaxed">
                        Pelapor tidak memberikan identitas namun tidak dapat memantau laporan.
                    </p>
                </div>
            </a>

            <!-- TERVERIFIKASI -->
            <a href="#"
               class="w-[400px] h-[154px] bg-[#D9D9D9] rounded-2xl p-6 flex gap-5
                      shadow-[0_6px_14px_rgba(0,0,0,0.18)]
                      hover:shadow-[0_10px_24px_rgba(0,0,0,0.22)]
                      transition">

                <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center
                            shadow-[0_4px_10px_rgba(0,0,0,0.2)]">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-7 h-7 text-gray-800"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18" />
                    </svg>
                </div>

                <div>
                    <h3 class="text-2xl font-extrabold text-black mb-1">
                        Identitas Terverifikasi
                    </h3>
                    <p class="text-base text-gray-800 leading-relaxed">
                        Laporkan pengaduan dengan memberikan informasi kontak dasar untuk keperluan verifikasi dan komunikasi tindak lanjut laporan.
                    </p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection