<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WBS Bangkalan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="font-manrope">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>


<script>
// animasi Hero text
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.hero-animate');
    let isVisible = false;

    // fungsi tampilkan teks
    function showHero() {
        elements.forEach((el, i) => {
            setTimeout(() => el.classList.add('show'), i * 200);
        });
        isVisible = true;
    }

    // fungsi sembunyikan teks (masuk ke kiri)
    function hideHero() {
        elements.forEach(el => el.classList.remove('show'));
        isVisible = false;
    }

    // tampilkan saat load
    showHero();

    window.addEventListener('scroll', () => {
        const triggerPoint = 200; // 🔥 UBAH NILAI INI JIKA PERLU

        if (window.scrollY > triggerPoint && isVisible) {
            hideHero(); // scroll ke bawah → hilang ke kiri
        }

        if (window.scrollY <= triggerPoint && !isVisible) {
            showHero(); // scroll ke atas → muncul dari kiri
        }
    });
});


window.addEventListener('beforeunload', () => {
    document.querySelectorAll('.hero-animate').forEach(el => {
        el.classList.remove('show');
    });
});

// bg animation
document.addEventListener('DOMContentLoaded', () => {
    const backgrounds = document.querySelectorAll('.bg-fade');
    let isVisible = false;

    function fadeInBg() {
        backgrounds.forEach(bg => bg.classList.add('show'));
        isVisible = true;
    }

    function fadeOutBg() {
        backgrounds.forEach(bg => bg.classList.remove('show'));
        isVisible = false;
    }

    // Fade in saat pertama load
    setTimeout(() => {
        fadeInBg();
    }, 200);

    window.addEventListener('scroll', () => {
        const triggerPoint = 550; // 🔥 UBAH SESUAI KEBUTUHAN

        if (window.scrollY > triggerPoint && isVisible) {
            fadeOutBg(); // scroll ke bawah → memudar
        }

        if (window.scrollY <= triggerPoint && !isVisible) {
            fadeInBg(); // scroll ke atas → muncul lagi
        }
    });
});

// End of animasi Hero text

// animasi apa itu WBS
document.addEventListener('DOMContentLoaded', () => {
    const animatedItems = document.querySelectorAll('.animate-left, .animate-bottom');

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-show');
                } else {
                    entry.target.classList.remove('animate-show'); // 🔥 memudar lagi saat keluar
                }
            });
        },
        {
            threshold: 0.3
        }
    );

    animatedItems.forEach(item => observer.observe(item));
});
// end of animasi apa itu wbs


</script>

</html>
