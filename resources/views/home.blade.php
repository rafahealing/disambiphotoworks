<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Disambiphotoworks</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;600&display=swap"
      rel="stylesheet"
    />
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
  </head>
  <body class="bg-white text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow fixed w-full z-50">
  <div class="container mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-semibold text-gray-900">Disambiphotoworks</h1>

    <!-- Hamburger button (visible on mobile) -->
    <button id="menu-toggle" class="md:hidden text-gray-800 focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Navigation (hidden on mobile) -->
    <nav id="menu" class="hidden md:flex space-x-6">
      <a href="{{ route('home') }}" class="hover:text-green-600 text-gray-800">Home</a>
      <a href="#galeri" class="hover:text-green-600 text-gray-800">Galeri</a>
      <a href="#services" class="hover:text-green-600 text-gray-800">Layanan</a>
      <a href="{{ route('login') }}" class="hover:text-green-600 text-gray-800">Sign Up</a>
      <a href="#contact" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Hubungi Kami</a>
    </nav>
  </div>

  <!-- Mobile Menu (Dropdown) -->
  <div id="mobile-menu" class="md:hidden hidden px-6 pb-4">
    <a href="#about" class="block py-2 text-gray-800 hover:text-green-600">Home</a>
    <a href="#galeri" class="block py-2 hover:text-green-600 text-gray-800">Galeri</a>
    <a href="#services" class="block py-2 text-gray-800 hover:text-green-600">Layanan</a>
    <a href="{{ route('signup') }}" class="hover:text-green-600 text-gray-800">Sign Up</a>
    <a href="#contact" class="block py-2 bg-green-600 text-white rounded hover:bg-green-700 text-center">Hubungi Kami</a>
  </div>

  <script>
    const toggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</header>


    <!-- Hero -->
    <section class="h-screen bg-cover bg-center flex items-center" style="background-image: url('images/pengantin.jpg');">
      <div class="bg-black bg-opacity-70 w-full h-full flex items-center">
        <div class="container mx-auto px-6 text-white">
          <h2 class="text-4xl md:text-6xl font-bold">Abadikan Momen Berharga Anda</h2>
          <p class="mt-4 text-lg md:text-xl max-w-xl">Fotografi profesional dengan sentuhan seni dan keahlian teknis.</p>
          <a href="https://wa.me/6281298407114" class="mt-6 inline-block bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700">Chat Sekarang</a>
        </div>
      </div>
    </section>

    <!-- About -->
    <section class="py-20 px-6 bg-white text-black">
    <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <img src="/images/logo.jpg" alt="About" class="rounded-xl">
      <div>
        <h2 class="text-3xl md:text-4xl font-light mb-4">About Disambiphotoworks</h2>
        <p class="text-lg leading-relaxed">Kami adalah tim fotografer profesional yang berdedikasi untuk mengabadikan setiap momen istimewa Anda. Setiap hasil karya kami diproses dengan detail, mulai dari komposisi, pencahayaan, hingga editing akhir yang memukau.</p>
      </div>
    </div>
  </section>

    <!-- Services -->
    <section id="services" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <h3 class="text-4xl font-bold text-center mb-12 text-gray-900">Layanan Kami</h3>
        <div class="grid md:grid-cols-2 gap-12 text-center">
          <div class="p-8 bg-gray-50 shadow-xl rounded-xl transition transform hover:scale-105 duration-300">
            <h4 class="text-2xl font-semibold mb-4 text-green-600">Fotografi</h4>
            <p class="text-lg text-gray-700">Hasil foto berkualitas tinggi untuk setiap momen berharga Anda.</p>
          </div>
          <div class="p-8 bg-gray-50 shadow-xl rounded-xl transition transform hover:scale-105 duration-300">
            <h4 class="text-2xl font-semibold mb-4 text-green-600">Videografi</h4>
            <p class="text-lg text-gray-700">Video sinematik yang elegan untuk dokumentasi yang tak terlupakan.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- card -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
  <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

    <!-- WEDDING -->
    <div class="border rounded-2xl shadow p-6">
      <h2 class="text-xl font-semibold mb-2 uppercase">Wedding</h2>
      <p class="mb-4 text-gray-500">Paket dokumentasi pernikahan cinematic dengan pendekatan storytelling visual.</p>
      <p class="text-3xl font-bold mb-2">Rp6.000.000<span class="text-base font-normal"> / sesi</span></p>
      <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg font-semibold mb-4">Pesan Sekarang</button>
      <div>
        <h3 class="font-semibold mb-2">Termasuk:</h3>
        <ul class="space-y-1">
          <li>✓ 1 videografer & 1 fotografer</li>
          <li>✓ Durasi 6-8 jam dokumentasi</li>
          <li>✓ Highlight video cinematic</li>
          <li>✓ 50+ foto edit high-res</li>
          <li class="text-red-500">✗ Album cetak</li>
          <li class="text-red-500">✗ Drone footage</li>
        </ul>
      </div>
    </div>

    <!-- PREWEDDING -->
    <div class="border rounded-2xl shadow p-6">
      <h2 class="text-xl font-semibold mb-2 uppercase">Prewedding</h2>
      <p class="mb-4 text-gray-500">Paket foto prewedding dengan konsep bebas & lokasi outdoor/indoor.</p>
      <p class="text-3xl font-bold mb-2">Rp4.000.000<span class="text-base font-normal"> / sesi</span></p>
      <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg font-semibold mb-4">Pesan Sekarang</button>
      <div>
        <h3 class="font-semibold mb-2">Termasuk:</h3>
        <ul class="space-y-1">
          <li>✓ 1 fotografer</li>
          <li>✓ Durasi 4 jam pemotretan</li>
          <li>✓ 30+ foto edit high-res</li>
          <li>✓ Revisi warna & tone</li>
          <li class="text-red-500">✗ Video dokumentasi</li>
          <li class="text-red-500">✗ Cetak album</li>
        </ul>
      </div>
    </div>

    <!-- LAMARAN -->
    <div class="border rounded-2xl shadow p-6">
      <h2 class="text-xl font-semibold mb-2 uppercase">Lamaran</h2>
      <p class="mb-4 text-gray-500">Dokumentasi momen lamaran penuh kehangatan, cocok untuk kebutuhan media sosial & keluarga.</p>
      <p class="text-3xl font-bold mb-2">Rp3.500.000<span class="text-base font-normal"> / sesi</span></p>
      <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg font-semibold mb-4">Pesan Sekarang</button>
      <div>
        <h3 class="font-semibold mb-2">Termasuk:</h3>
        <ul class="space-y-1">
          <li>✓ 1 fotografer</li>
          <li>✓ Durasi 3 jam dokumentasi</li>
          <li>✓ 25+ foto edit</li>
          <li>✓ Softcopy via Google Drive</li>
          <li class="text-red-500">✗ Video dokumentasi</li>
          <li class="text-red-500">✗ Drone</li>
        </ul>
      </div>
    </div>

    <!-- GRADUATION -->
    <div class="border rounded-2xl shadow p-6">
      <h2 class="text-xl font-semibold mb-2 uppercase">Graduation</h2>
      <p class="mb-4 text-gray-500">Paket foto kelulusan personal atau kelompok, dengan style dokumenter atau candid.</p>
      <p class="text-3xl font-bold mb-2">Rp2.000.000<span class="text-base font-normal"> / sesi</span></p>
      <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg font-semibold mb-4">Pesan Sekarang</button>
      <div>
        <h3 class="font-semibold mb-2">Termasuk:</h3>
        <ul class="space-y-1">
          <li>✓ 1 fotografer</li>
          <li>✓ Durasi 2 jam pemotretan</li>
          <li>✓ 20+ foto edit</li>
          <li>✓ Background & styling dibantu</li>
          <li class="text-red-500">✗ Video dokumentasi</li>
          <li class="text-red-500">✗ Indoor studio</li>
        </ul>
      </div>
    </div>

  </div>
</div>


    <!-- Testimonials -->
    <section id="" class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 text-center">
    <h3 class="text-3xl font-bold mb-4 text-gray-900">Testimoni Klien</h3>
    <p class="text-gray-600 mb-8">Apa kata mereka tentang layanan kami</p>
    <div class="grid md:grid-cols-3 gap-6">
      
      <!-- Testimoni 1 -->
      <div class="bg-white p-6 rounded-lg shadow text-left">
        <img src="images/nikah.jpg" alt="Klien 1" class="w-16 h-16 rounded-full mb-4" />
        <div class="flex items-center text-yellow-400 mb-2">
          ★★★★★
        </div>
        <p class="italic text-gray-700">"Pelayanan sangat memuaskan dan hasil fotonya luar biasa! Akan saya rekomendasikan ke teman-teman."</p>
        <p class="mt-4 font-semibold text-gray-900">- Sarah Putri</p>
      </div>

      <!-- Testimoni 2 -->
      <div class="bg-white p-6 rounded-lg shadow text-left">
        <img src="images/nikah2.jpg" alt="Klien 2" class="w-16 h-16 rounded-full mb-4" />
        <div class="flex items-center text-yellow-400 mb-2">
          ★★★★☆
        </div>
        <p class="italic text-gray-700">"Timnya profesional dan sangat ramah. Editing fotonya juga natural dan sesuai selera."</p>
        <p class="mt-4 font-semibold text-gray-900">- Budi Santoso</p>
      </div>

      <!-- Testimoni 3 -->
      <div class="bg-white p-6 rounded-lg shadow text-left">
        <img src="images/nikah3.jpg" alt="Klien 3" class="w-16 h-16 rounded-full mb-4" />
        <div class="flex items-center text-yellow-400 mb-2">
          ★★★★★
        </div>
        <p class="italic text-gray-700">"Rekomendasi terbaik untuk dokumentasi acara penting. Hasilnya sinematik dan penuh emosi."</p>
        <p class="mt-4 font-semibold text-gray-900">- Ayu Lestari</p>
      </div>

    </div>
  </div>
</section>


    <!-- Contact -->
    <footer id="contact" class="bg-gray-800 text-white py-12">
      <div class="container mx-auto px-6 text-center">
        <div class="flex justify-center items-center mb-4 space-x-3">
          <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-10 h-10" />
          <h4 class="text-2xl font-bold">Disambiphotoworks</h4>
        </div>

        <div class="flex justify-center space-x-6 mb-6 text-gray-300 text-lg">
          <a href="mailto:disambiphotoworks@example.com" class="hover:text-white flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M4 4h16v16H4z" fill="none" />
              <path d="M22 6l-10 7L2 6" />
            </svg>
            <span>Email</span>
          </a>

          <a
            href="https://wa.me/6281298407114?text=Halo%20Disambiphotoworks!%20Saya%20tertarik%20dengan%20layanan%20fotografi%20Anda.%20Boleh%20tanya-tanya%20lebih%20lanjut%3F"
            target="_blank"
            class="hover:text-white flex items-center space-x-2"
          >
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M20.52 3.48A11.74 11.74 0 0012 0C5.373 0 0 5.373 0 12c0 2.093.54 4.095 1.56 5.856L0 24l6.278-1.634A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12 0-3.18-1.24-6.167-3.48-8.52zM12 22c-1.94 0-3.845-.5-5.53-1.45l-.39-.22-3.73.97.98-3.67-.25-.4A9.98 9.98 0 012 12c0-5.522 4.478-10 10-10s10 4.478 10 10-4.478 10-10 10zm5.1-7.1l-1.25-1.25c-.32-.32-.82-.38-1.2-.13l-.7.46c-.2.14-.46.12-.63-.05l-2.4-2.4c-.17-.17-.2-.43-.05-.63l.47-.7c.25-.38.19-.88-.13-1.2L9.1 6.9c-.32-.32-.83-.32-1.15 0l-.65.65a4.3 4.3 0 00-.86 4.88 12.43 12.43 0 005.73 5.73c1.8.84 3.79.42 4.88-.86l.65-.65c.33-.32.33-.83.01-1.15z"
              />
            </svg>
            <span>WhatsApp</span>
          </a>

          <a href="https://instagram.com/disambiphotoworks" target="_blank" class="hover:text-white flex items-center space-x-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.65 0 3 1.35 3 3v10c0 1.65-1.35 3-3 3H7c-1.65 0-3-1.35-3-3V7c0-1.65 1.35-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-2a1.5 1.5 0 100 3 1.5 1.5 0 000-3z"
              />
            </svg>
            <span>Instagram</span>
          </a>
        </div>

        <p class="text-sm text-gray-400">© 2025 Disambiphotoworks. All rights reserved.</p>
      </div>
    </footer>

    
  </body>
</html>
