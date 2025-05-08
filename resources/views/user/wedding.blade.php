<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto Pernikahan | Disambiphotoworks</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;600&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Playfair Display', serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<body class="bg-gray-100">

    <!-- Header -->
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="bg-green-600 text-white py-16 text-center" id="wedding-gallery">
        <h2 class="text-3xl font-bold mb-4">Galeri Foto Pernikahan</h2>
        <p class="text-xl">Lihat koleksi foto-foto terbaik kami untuk hari spesial Anda.</p>
    </section>

    <!-- Gallery Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <!-- Foto 1 -->
                <div class="group relative">
                    <img src="{{ asset('images/AN/wedding(A,N).jpg') }}" alt="#Wedding 1"
                        class="w-full aspect-[4/3] object-cover rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">

                    <a href="{{ url('/detail/wedding-detail-an') }}" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl">Lihat Detail</span>
                    </a>
                    <p class="mt-2 text-center text-lg text-gray-800 font-semibold">Kak Arga & Kak Nia</p>
                </div>


                <!-- Foto 2 -->
                <div class="group relative">
                    <img src="{{ asset('images/MA/wedding(M,A).jpg') }}" alt="#Wedding 2"
                        class="w-full aspect-[4/3] object-cover rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">

                    <a href="{{ url('/detail/wedding-detail-ma') }}" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl">Lihat Detail</span>
                    </a>
                    <p class="mt-2 text-center text-lg text-gray-800 font-semibold">Kak M & Kak A</p> <!-- Nama Foto -->
                </div>

                <!-- Foto 3 -->
                <div class="group relative">
                    <img src="{{ asset('images/IA/wedding(I,A).jpg') }}" alt="#Wedding 3"
                        class="w-full aspect-[4/3] object-cover rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">

                    <a href="{{ url('/detail/wedding-detail-ia') }}" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl">Lihat Detail</span>
                    </a>
                    <p class="mt-2 text-center text-lg text-gray-800 font-semibold">Kak Ike & Kak Ahmad </p> <!-- Nama Foto -->
                </div>

                <!-- Foto 4 -->
                <div class="group relative">
                    <img src="{{ asset('images/AL/wedding(A,L).jpg') }}" alt="#Wedding 4"
                        class="w-full aspect-[4/3] object-cover rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">

                    <a href="{{ url('/detail/wedding-detail-al') }}" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl">Lihat Detail</span>
                    </a>
                    <p class="mt-2 text-center text-lg text-gray-800 font-semibold">Kak A & Kak L</p> <!-- Nama Foto -->
                </div>

                <!-- Foto 5 -->
                <div class="group relative">
                    <img src="{{ asset('images/ID/wedding(I,D).jpg') }}" alt="#Wedding 5"
                        class="w-full aspect-[4/3] object-cover rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">

                    <a href="{{ url('/detail/wedding-detail-id') }}" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl">Lihat Detail</span>
                    </a>
                    <p class="mt-2 text-center text-lg text-gray-800 font-semibold">Kak I & Kak D</p> <!-- Nama Foto -->
                </div>

                <!-- Foto 6 -->
                <div class="group relative">
                    <img src="{{ asset('images/DW/wedding(D,W).jpg') }}" alt="#Wedding 6"
                        class="w-full aspect-[4/3] object-cover rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">

                    <a href="{{ url('/detail/wedding-detail-dw') }}" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl">Lihat Detail</span>
                    </a>
                    <p class="mt-2 text-center text-lg text-gray-800 font-semibold">Kak D & Kak W</p> <!-- Nama Foto -->
                </div>

                <!-- Foto 7 -->
                <div class="group relative">
                    <img src="{{ asset('images/ND/wedding(N,D).jpg') }}" alt="#Wedding 7"
                        class="w-full aspect-[4/3] object-cover rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">

                    <a href="{{ url('/detail/wedding-detail-nd') }}" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl">Lihat Detail</span>
                    </a>
                    <p class="mt-2 text-center text-lg text-gray-800 font-semibold">Kak N & Kak D</p> <!-- Nama Foto -->
                </div>

                <!-- Foto 8 -->
                <div class="group relative">
                    <img src="{{ asset('images/NB/wedding(N,B).jpg') }}" alt="#Wedding 8"
                        class="w-full aspect-[4/3] object-cover rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">

                    <a href="{{ url('/detail/wedding-detail-nb') }}" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl">Lihat Detail</span>
                    </a>
                    <p class="mt-2 text-center text-lg text-gray-800 font-semibold">Kak N & Kak B</p> <!-- Nama Foto -->
                </div>

                <!-- Foto 9 -->
                <div class="group relative">
                    <img src="{{ asset('images/SF/wedding(S,F).jpg') }}" alt="#Wedding 9"
                        class="w-full aspect-[4/3] object-cover rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">

                    <a href="{{ url('/detail/wedding-detail-sf') }}" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl">Lihat Detail</span>
                    </a>
                    <p class="mt-2 text-center text-lg text-gray-800 font-semibold">Kak S & Kak F</p> <!-- Nama Foto -->
                </div>

                <!-- Foto 10 -->
                <div class="group relative">
                    <img src="{{ asset('images/AI/wedding(A,I).jpg') }}" alt="#Wedding 10"
                        class="w-full aspect-[4/3] object-cover rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">

                    <a href="{{ url('/detail/wedding-detail-ai') }}" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl">Lihat Detail</span>
                    </a>
                    <p class="mt-2 text-center text-lg text-gray-800 font-semibold">Kak I & Kak A</p> <!-- Nama Foto -->
                </div>

                <!-- Foto lainnya -->
                <!-- Tambahkan lebih banyak foto di sini jika diperlukan -->

            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto text-center">
            <p class="text-sm text-gray-400">© 2025 Disambiphotoworks. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Optional: add JavaScript for gallery functionality (e.g., lightbox for images)
    </script>

</body>

</html>