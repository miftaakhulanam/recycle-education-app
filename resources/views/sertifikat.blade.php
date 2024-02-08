<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ public_path('resources/css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>RECYCLE EDUCATION APP</title>
</head>

<body class="font-poppins">

    <img src="{{ public_path('storage/img/sertifikat.png') }}" class="absolute w-full h-full top-0 left-0"
        alt="">

    <h1>Sertifikast</h1>
    {{-- <h1
        class="absolute text-[#940E0E] text-4xl font-semibold -mt-2 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        {{ $nama }}
    </h1>
    <h1
        class="absolute text-white text-base font-normal mt-14 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        {{ $kelas }}
    </h1>
    <p
        class="absolute text-white text-[11px] font-light -ml-[105px] mt-[178px] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        {{ $serial_number }}
    </p>
    <p
        class="absolute text-white text-[11px] font-light -ml-[205px] mt-[164px] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        {{ $tanggal }}
    </p> --}}
</body>

</html>
