<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Pernikahan | Disambiphotoworks</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    h1, h2, h3 {
      font-family: 'Playfair Display', serif;
    }
  </style>
  @vite([])
</head>
<body class="bg-white text-gray-800">

  <!-- Header -->
  @include('layouts.header')

  <!-- Hero / Featured Photo -->
  <section class="relative overflow-hidden">
    <div class="max-w-screen-md mx-auto px-4 py-10">
      <div class="h-[250px] overflow-hidden rounded-xl shadow-lg">
        <img src="{{ asset('images/AN/wedding(A,N).jpg') }}" alt="Kak A & Kak N"
          class="w-full h-full object-cover object-center">
      </div>
      <div class="text-center mt-6">
        <h1 class="text-3xl md:text-4xl font-bold mb-2">Kak Arga & Kak Nia</h1>
        <p class="text-base text-gray-600">Momen Spesial di Hari Pernikahan Mereka</p>
      </div>
    </div>
  </section>

  <!-- Deskripsi -->
  <section class="py-12 px-6 max-w-3xl mx-auto text-center">
    <h2 class="text-2xl font-semibold mb-4">Tentang Momen Ini</h2>
    <p class="text-gray-700 text-lg leading-relaxed">
      Sebuah hari yang penuh cinta dan kebahagiaan di tengah keluarga dan teman-teman terdekat. Dengan latar belakang alam yang menawan dan suasana hangat, momen ini menjadi kenangan yang tak terlupakan bagi Kak Arga & Kak Nia.
    </p>
  </section>


  <!-- Galeri Foto -->
  <section class="py-12 bg-gray-50">
  <div class="max-w-screen-lg mx-auto px-6">
    <h3 class="text-2xl font-semibold text-center mb-10">Galeri Tambahan</h3>

    <div class="relative">
      <!-- Tombol navigasi kiri -->
      <button onclick="scrollGallery(-1)"
        class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white shadow-md rounded-full p-2 hover:bg-gray-200">
        ←
      </button>

      <!-- Tombol navigasi kanan -->
      <button onclick="scrollGallery(1)"
        class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white shadow-md rounded-full p-2 hover:bg-gray-200">
        →
      </button>

      <!-- Carousel container (dengan scroll horizontal) -->
      <div id="carousel" class="flex gap-4 snap-x snap-mandatory overflow-x-auto scroll-smooth pb-4 px-10">
        <div class="flex-shrink-0 w-80 snap-start">
          <img src="{{ asset('images/AN/wedding(A,N1).jpg') }}" alt="Foto Tambahan 1" class="rounded-lg shadow-lg object-cover w-full aspect-[4/3]">
        </div>
        <div class="flex-shrink-0 w-80 snap-start">
          <img src="{{ asset('images/AN/wedding(A,N3).jpg') }}" alt="Foto Tambahan 2" class="rounded-lg shadow-lg object-cover w-full aspect-[4/3]">
        </div>
        <div class="flex-shrink-0 w-80 snap-start">
          <img src="{{ asset('images/login.jpg') }}" alt="Foto Tambahan 3" class="rounded-lg shadow-lg object-cover w-full aspect-[4/3]">
        </div>
        <div class="flex-shrink-0 w-80 snap-start">
          <img src="{{ asset('images/AN/wedding(A,N2).jpg') }}" alt="Foto Tambahan 4" class="rounded-lg shadow-lg object-cover w-full aspect-[4/3]">
        </div>
        <div class="flex-shrink-0 w-80 snap-start">
          <img src="{{ asset('images/AN/wedding(A,N4).jpg') }}" alt="Foto Tambahan 4" class="rounded-lg shadow-lg object-cover w-full aspect-[4/3]">
        </div>
        <div class="flex-shrink-0 w-80 snap-start">
          <img src="{{ asset('images/AN/wedding(A,N5).jpg') }}" alt="Foto Tambahan 4" class="rounded-lg shadow-lg object-cover w-full aspect-[4/3]">
        </div>
        <!-- Tambahkan foto lainnya jika perlu -->
      </div>
    </div>
  </div>
</section>

<!-- Script untuk scroll gallery -->
<script>
  function scrollGallery(direction) {
    const carousel = document.getElementById('carousel');
    const scrollAmount = 320; // Sesuaikan dengan lebar item + gap
    carousel.scrollBy({
      left: scrollAmount * direction,
      behavior: 'smooth'
    });
  }
</script>




  

  <!-- Kembali ke Galeri -->
  <div class="text-center py-10">
    <a href="{{ route('wedding') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition">← Kembali ke Galeri</a>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8 text-center">
    <p class="text-sm text-gray-400">© 2025 Disambiphotoworks. All rights reserved.</p>
  </footer>

</body>
</html>
