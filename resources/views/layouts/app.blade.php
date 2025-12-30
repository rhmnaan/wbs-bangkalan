<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>WBS Bangkalan</title>

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</body>
</html>
