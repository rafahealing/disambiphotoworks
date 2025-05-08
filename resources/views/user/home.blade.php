<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Disambiphotoworks</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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
  @vite([])
</head>


<body class="bg-white text-gray-800">
  <!-- Header -->
  @include('layouts.header')


  <!-- Hero -->
  <section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background images -->
    <div id="bg-slider" class="absolute inset-0 w-full h-full z-0">
      <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-100" style="background-image: url('images/pengantin.jpg');"></div>
      <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0" style="background-image: url('images/AI/wedding(A,I3).jpg');"></div>
      <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0" style="background-image: url('images/AN/wedding(A,N1).jpg');"></div>
      <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0" style="background-image: url('images/ID/wedding(I,D4).jpg');"></div>
      <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0" style="background-image: url('images/IA/wedding(I,A2).jpg');"></div>
    </div>

    <!-- Overlay & Content -->
    <div class="relative z-10 bg-black bg-opacity-70 w-full h-full flex items-center">
      <div class="container mx-auto px-6 text-white">
        <h2 class="text-4xl md:text-6xl font-bold">Abadikan Momen Berharga Anda</h2>
        <p class="mt-4 text-lg md:text-xl max-w-xl">Mengabadikan momen berharga dengan sentuhan seni dan keindahan visual, karena setiap momen layak untuk di abadikan.</p>
      </div>
    </div>
  </section>

  <script>
    const slides = document.querySelectorAll('#bg-slider > div');
    let current = 0;

    setInterval(() => {
      slides[current].classList.remove('opacity-100');
      slides[current].classList.add('opacity-0');

      current = (current + 1) % slides.length;

      slides[current].classList.remove('opacity-0');
      slides[current].classList.add('opacity-100');
    }, 10000); // Ganti setiap 5 detik
  </script>



  <!-- About -->
  <section class="py-20 px-6 bg-white text-black">
    <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <img src="/images/logo.jpg" alt="About" class="rounded-xl">
      <div>
        <h2 class="text-3xl md:text-4xl font-light mb-4">About Disambiphotoworks</h2>
        <p class="text-lg leading-relaxed text-justify">Kami adalah tim fotografer profesional yang berdedikasi untuk mengabadikan setiap momen istimewa Anda. Setiap hasil karya kami diproses dengan detail, mulai dari komposisi, pencahayaan, hingga editing akhir yang memukau.</p>
      </div>
    </div>
  </section>

    <!-- Services -->
    <section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
      <h3 class="text-4xl font-bold text-center mb-12 text-gray-900">Layanan Kami</h3>
      <div class="">
        <!-- Fotografi & Videografi -->
        <div class="p-8 bg-gray-50 shadow-xl rounded-xl transition transform hover:scale-105 duration-300 col-span-1 md:col-span-2">
          <div class="flex justify-center items-center mb-4 space-x-3">
            <h4 class="text-2xl font-semibold text-green-600">Fotografi & Videografi</h4>
          </div>
          <p class="text-lg text-gray-700 text-justify">Hasil foto berkualitas tinggi dan video sinematik elegan untuk setiap momen berharga Anda. Kami mengabadikan momen istimewa dengan sentuhan profesional, menggunakan peralatan terbaik agar setiap detik terekam indah dan siap dikenang sepanjang waktu.</p>
          <div class="text-center mt-6">
            <a href="https://www.instagram.com/disambiphotoworks/" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">Lihat Review</a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Galeri Slider -->
  <div class="relative overflow-hidden">
    <div id="gallery-carousel" class="flex transition-transform duration-700 ease-in-out">
      <img src="/images/lamaran.jpg" alt="Galeri 1" class="w-full sm:w-1/4 object-cover rounded-lg shadow-lg mx-2">
      <img src="/images/login.jpg" alt="Galeri 2" class="w-full sm:w-1/4 object-cover rounded-lg shadow-lg mx-2">
      <img src="/images/nikah2.jpg" alt="Galeri 3" class="w-full sm:w-1/4 object-cover rounded-lg shadow-lg mx-2">
      <img src="/images/sign.jpg" alt="Galeri 4" class="w-full sm:w-1/4 object-cover rounded-lg shadow-lg mx-2">
      <img src="/images/pengantin.jpg" alt="Galeri 5" class="w-full sm:w-1/4 object-cover rounded-lg shadow-lg mx-2">
      <img src="/images/login.jpg" alt="Galeri 6" class="w-full sm:w-1/4 object-cover rounded-lg shadow-lg mx-2">
      <img src="/images/nikah3.jpg" alt="Galeri 7" class="w-full sm:w-1/4 object-cover rounded-lg shadow-lg mx-2">
        </div>
      </div>

      <script>
        const galleryCarousel = document.getElementById('gallery-carousel');
        const gallerySlides = document.querySelectorAll('#gallery-carousel > img');
        const totalGallerySlides = gallerySlides.length;
        let galleryIndex = 0;

        setInterval(() => {
      galleryIndex = (galleryIndex + 1) % totalGallerySlides;
      galleryCarousel.style.transform = `translateX(-${galleryIndex * 25}%)`;
        }, 3000); // Ganti gambar setiap 3 detik
      </script>






  <!-- Booking Section -->
  <section id="booking" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h3 class="text-4xl font-bold text-center mb-12 text-gray-900">Lihat Paket Kami</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <!-- Ulangi struktur card -->
        <!-- CARD 1 -->
        <div class="flex flex-col md:flex-row border rounded-2xl shadow overflow-hidden transition transform hover:scale-105 duration-300">
          <div class="md:w-2/3 p-6 flex flex-col justify-between">
            <div>
              <h2 class="text-2xl font-bold uppercase mb-4 text-green-600">Wedding</h2>
              <p class="text-gray-700 text-justify">
                Paket ini dirancang untuk mendokumentasikan seluruh rangkaian acara pernikahan — mulai dari persiapan pengantin, akad atau pemberkatan, hingga resepsi.
              </p>
            </div>
            <a href="{{ route('user.booking') }}" class="mt-6 inline-block bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg font-semibold w-max">
              Booking Sekarang
            </a>
          </div>
          <div class="md:w-1/3 h-64 md:h-auto overflow-hidden">
            <img src="/images/IA/wedding(I,A5).jpg" alt="Wedding" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="flex flex-col md:flex-row border rounded-2xl shadow overflow-hidden transition transform hover:scale-105 duration-300">
          <div class="md:w-2/3 p-6 flex flex-col justify-between">
            <div>
              <h2 class="text-2xl font-bold uppercase mb-4 text-green-600">Prewedding</h2>
              <p class="text-gray-700 text-justify">
                Paket ini menawarkan sesi pemotretan khusus pasangan sebelum hari pernikahan. Konsep dapat disesuaikan, baik indoor (studio) maupun outdoor (alam atau tempat bersejarah).
                Tujuan: Mengabadikan chemistry dan cinta sebelum menikah.
              </p>
            </div>
            <a href="{{ route('user.booking') }}" class="mt-6 inline-block bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg font-semibold w-max">
              Booking Sekarang
            </a>
          </div>
          <div class="md:w-1/3 h-64 md:h-auto overflow-hidden">
            <img src="/images/AI/wedding(A,I5).jpg" alt="Prewedding" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="flex flex-col md:flex-row border rounded-2xl shadow overflow-hidden transition transform hover:scale-105 duration-300">
          <div class="md:w-2/3 p-6 flex flex-col justify-between">
            <div>
              <h2 class="text-2xl font-bold uppercase mb-4 text-green-600">Lamaran</h2>
              <p class="text-gray-700 text-justify">
                Paket ini fokus pada dokumentasi momen lamaran atau tunangan secara hangat dan intim. Menangkap setiap senyum, tangis bahagia, dan kebersamaan dua keluarga.
              </p>
            </div>
            <a href="{{ route('user.booking') }}" class="mt-6 inline-block bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg font-semibold w-max">
              Booking Sekarang
            </a>
          </div>
          <div class="md:w-1/3 h-64 md:h-auto overflow-hidden">
            <img src="/images/lamaran.jpg" alt="Lamaran" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
          </div>
        </div>

        <!-- CARD 4 -->
        <div class="flex flex-col md:flex-row border rounded-2xl shadow overflow-hidden transition transform hover:scale-105 duration-300">
          <div class="md:w-2/3 p-6 flex flex-col justify-between">
            <div>
              <h2 class="text-2xl font-bold uppercase mb-4 text-green-600">Graduation</h2>
              <p class="text-gray-700 text-justify">
                Paket ini untuk mendokumentasikan hari kelulusan secara formal maupun kasual. Bisa dilakukan di kampus, studio, atau tempat pilihan Anda.
              </p>
            </div>
            <a href="{{ route('user.booking') }}" class="mt-6 inline-block bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg font-semibold w-max">
              Booking Sekarang
            </a>
          </div>
          <div class="md:w-1/3 h-64 md:h-auto overflow-hidden">
            <img src="/images/lamaran.jpg" alt="Graduation" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
          </div>
        </div>
      </div>
    </div>
  </section>



  </div>
  </div>

  <!-- Banner Diskon -->
  <div class="bg-blue-600 text-white px-4 py-3">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between">
      <p class="text-center md:text-left text-sm md:text-base font-medium">
        🎉 Dapatkan diskon bersahabat untuk semua layanan pemotretan sebelum 2 bulan hari H!
      </p>
      <a href="/promo" class="mt-2 md:mt-0 inline-block bg-white text-blue-600 font-semibold px-4 py-2 rounded hover:bg-blue-100 transition">
        Tanya Admin
      </a>
    </div>
  </div>


  <!-- Testimonials -->
  <section class="py-12 bg-gray-50">
    <div class="max-w-screen-xl mx-auto px-6">
      <h3 class="text-2xl font-semibold text-center mb-10">Apa Kata Klien Kami</h3>

      <div id="testimonial-wrapper" class="relative overflow-hidden">
        <div id="testimonial-carousel" class="flex transition-transform duration-700 ease-in-out">

          <!-- Slide 1 -->
          <div class="flex min-w-full gap-6">
            <!-- Testimoni 1 -->
            <div class="bg-white p-6 rounded-lg shadow text-left w-1/3">
              <img src="images/AI/wedding(A,I6).jpg" alt="Klien 1" class="w-16 h-16 rounded-full mb-4" />
              <div class="flex items-center text-yellow-400 mb-2">★★★★★</div>
              <p class="italic text-gray-700">"Pelayanan sangat memuaskan dan hasil fotonya luar biasa!"</p>
              <p class="mt-4 font-semibold text-gray-900">- Kak I</p>
            </div>

            <!-- Testimoni 2 -->
            <div class="bg-white p-6 rounded-lg shadow text-left w-1/3">
              <img src="images/AL/wedding(A,L2).jpg" alt="Klien 2" class="w-16 h-16 rounded-full mb-4" />
              <div class="flex items-center text-yellow-400 mb-2">★★★★☆</div>
              <p class="italic text-gray-700">"Timnya profesional dan sangat ramah. Editing-nya natural."</p>
              <p class="mt-4 font-semibold text-gray-900">- Kak L</p>
            </div>

            <!-- Testimoni 3 -->
            <div class="bg-white p-6 rounded-lg shadow text-left w-1/3">
              <img src="images/AN/wedding(A,N4).jpg" alt="Klien 3" class="w-16 h-16 rounded-full mb-4" />
              <div class="flex items-center text-yellow-400 mb-2">★★★★★</div>
              <p class="italic text-gray-700">"Dokumentasi terbaik, hasilnya sinematik dan penuh emosi."</p>
              <p class="mt-4 font-semibold text-gray-900">- Kak A</p>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="flex min-w-full gap-6">
            <!-- Testimoni 4 -->
            <div class="bg-white p-6 rounded-lg shadow text-left w-1/3">
              <img src="images/DW/wedding(D,W6).jpg" alt="Klien 4" class="w-16 h-16 rounded-full mb-4" />
              <div class="flex items-center text-yellow-400 mb-2">★★★★★</div>
              <p class="italic text-gray-700">"Sangat sabar menghadapi kami, hasil fotonya bikin terharu!"</p>
              <p class="mt-4 font-semibold text-gray-900">- Kak D</p>
            </div>

            <!-- Testimoni 5 -->
            <div class="bg-white p-6 rounded-lg shadow text-left w-1/3">
              <img src="images/IA/wedding(I,A5).jpg" alt="Klien 5" class="w-16 h-16 rounded-full mb-4" />
              <div class="flex items-center text-yellow-400 mb-2">★★★★☆</div>
              <p class="italic text-gray-700">"Fast response dan sangat komunikatif, suka banget hasilnya."</p>
              <p class="mt-4 font-semibold text-gray-900">- Kak I</p>
            </div>

            <!-- Testimoni 6 -->
            <div class="bg-white p-6 rounded-lg shadow text-left w-1/3">
              <img src="images/ID/wedding(I,D2).jpg" alt="Klien 6" class="w-16 h-16 rounded-full mb-4" />
              <div class="flex items-center text-yellow-400 mb-2">★★★★★</div>
              <p class="italic text-gray-700">"Setiap momen terekam dengan sempurna, luar biasa banget!"</p>
              <p class="mt-4 font-semibold text-gray-900">- Kak D</p>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="flex min-w-full gap-6">
            <!-- Testimoni 4 -->
            <div class="bg-white p-6 rounded-lg shadow text-left w-1/3">
              <img src="images/mA/wedding(m,A1).jpg" alt="Klien 4" class="w-16 h-16 rounded-full mb-4" />
              <div class="flex items-center text-yellow-400 mb-2">★★★★★</div>
              <p class="italic text-gray-700">"Sangat sabar menghadapi kami, hasil fotonya bikin terharu!"</p>
              <p class="mt-4 font-semibold text-gray-900">- Kak M</p>
            </div>

            <!-- Testimoni 5 -->
            <div class="bg-white p-6 rounded-lg shadow text-left w-1/3">
              <img src="images/NB/wedding(N,B1).jpg" alt="Klien 5" class="w-16 h-16 rounded-full mb-4" />
              <div class="flex items-center text-yellow-400 mb-2">★★★★☆</div>
              <p class="italic text-gray-700">"Fast response dan sangat komunikatif, suka banget hasilnya."</p>
              <p class="mt-4 font-semibold text-gray-900">- Kak B</p>
            </div>

            <!-- Testimoni 6 -->
            <div class="bg-white p-6 rounded-lg shadow text-left w-1/3">
              <img src="images/ND/wedding(N,D2).jpg" alt="Klien 6" class="w-16 h-16 rounded-full mb-4" />
              <div class="flex items-center text-yellow-400 mb-2">★★★★★</div>
              <p class="italic text-gray-700">"Setiap momen terekam dengan sempurna, luar biasa banget!"</p>
              <p class="mt-4 font-semibold text-gray-900">- Kak N</p>
            </div>
          </div>

          <div class="flex min-w-full gap-6">
            <!-- Testimoni 4 -->
            <div class="bg-white p-6 rounded-lg shadow text-left w-1/3">
              <img src="images/SF/wedding(S,F4).jpg" alt="Klien 4" class="w-16 h-16 rounded-full mb-4" />
              <div class="flex items-center text-yellow-400 mb-2">★★★★★</div>
              <p class="italic text-gray-700">"Sangat sabar menghadapi kami, hasil fotonya bikin terharu!"</p>
              <p class="mt-4 font-semibold text-gray-900">- Kak S</p>
            </div>

            <!-- Tambah Slide 3 dan seterusnya di sini kalau ada -->
          </div>
        </div>
      </div>
  </section>

  <script>
    const carousel = document.getElementById('testimonial-carousel');
    const totalSlides = document.querySelectorAll('#testimonial-carousel > div').length;
    let index = 0;

    setInterval(() => {
      index = (index + 1) % totalSlides;
      carousel.style.transform = `translateX(-${index * 100}%)`;
    }, 5000);
  </script>




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
          class="hover:text-white flex items-center space-x-2">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M20.52 3.48A11.74 11.74 0 0012 0C5.373 0 0 5.373 0 12c0 2.093.54 4.095 1.56 5.856L0 24l6.278-1.634A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12 0-3.18-1.24-6.167-3.48-8.52zM12 22c-1.94 0-3.845-.5-5.53-1.45l-.39-.22-3.73.97.98-3.67-.25-.4A9.98 9.98 0 012 12c0-5.522 4.478-10 10-10s10 4.478 10 10-4.478 10-10 10zm5.1-7.1l-1.25-1.25c-.32-.32-.82-.38-1.2-.13l-.7.46c-.2.14-.46.12-.63-.05l-2.4-2.4c-.17-.17-.2-.43-.05-.63l.47-.7c.25-.38.19-.88-.13-1.2L9.1 6.9c-.32-.32-.83-.32-1.15 0l-.65.65a4.3 4.3 0 00-.86 4.88 12.43 12.43 0 005.73 5.73c1.8.84 3.79.42 4.88-.86l.65-.65c.33-.32.33-.83.01-1.15z" />
          </svg>
          <span>WhatsApp</span>
        </a>

        <a href="https://instagram.com/disambiphotoworks" target="_blank" class="hover:text-white flex items-center space-x-2">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.65 0 3 1.35 3 3v10c0 1.65-1.35 3-3 3H7c-1.65 0-3-1.35-3-3V7c0-1.65 1.35-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-2a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
          </svg>
          <span>Instagram</span>
        </a>

        <a href="https://www.tiktok.com/@jasadokumentasisoloraya" target="_blank" class="hover:text-white flex items-center space-x-2">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12.325 2.003h3.113a5.2 5.2 0 0 0 4.295 4.275v3.116a8.246 8.246 0 0 1-4.275-1.247v7.292a5.879 5.879 0 1 1-5.88-5.878c.335 0 .662.033.978.095v3.182a2.7 2.7 0 1 0 2.69 2.694V2.003z" />
          </svg>
          <span>Tiktok</span>
        </a>

      </div>

      <p class="text-gray-300">Kabupaten Boyolali, Jawa Tengah</p>
      <a href="https://maps.app.goo.gl/MR9vnbcCxtwhKimB9" target="_blank" class="text-gray-300 hover:text-white">Lihat di Google Maps</a>


      <p class="text-sm text-gray-400">© 2025 Disambiphotoworks. All rights reserved.</p>
    </div>
  </footer>

  <!-- Pop-up Container -->
  <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6 relative">
      <button id="closePopup" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl font-bold">&times;</button>
      <img src="/images/lamaran.jpg" alt="Promo DisambiPhotoworks" class="w-full h-auto rounded mb-4">
      <h2 class="text-2xl font-bold text-blue-600 mb-2">Promo Spesial!</h2>
      <p class="text-gray-700 mb-4">Dapatkan diskon dengan harga bersahabat, untuk pemesanan 2 bulan sebelum hari H. Penawaran terbatas!</p>
      <a href="https://wa.me/6281298407114?text=Halo%20Disambiphotoworks!%20Saya%20tertarik%20dengan%20diskon%20sebelum%202%20bulan.%20Boleh%20tanya-tanya%20lebih%20lanjut%3F" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Tanya Admin</a>
    </div>
  </div>



  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const popup = document.getElementById('popup');
      const closeBtn = document.getElementById('closePopup');

      // Periksa apakah pop-up sudah pernah ditutup
      const isPopupClosed = localStorage.getItem('popupClosed');

      if (!isPopupClosed) {
        // Tampilkan pop-up setelah 5 detik
        setTimeout(() => {
          popup.classList.remove('hidden');
        }, 5000);
      }

      // Fungsi untuk menutup pop-up dan menyimpan status
      closeBtn.addEventListener('click', () => {
        popup.classList.add('hidden');
        localStorage.setItem('popupClosed', 'true');
      });

      // Menutup pop-up saat mengklik di luar konten pop-up
      window.addEventListener('click', (e) => {
        if (e.target === popup) {
          popup.classList.add('hidden');
          localStorage.setItem('popupClosed', 'true');
        }
      });
    });
  </script>

</body>

</html>