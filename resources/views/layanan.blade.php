<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disambiphotoworks</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Helvetica Neue', sans-serif;
    }
  </style>
</head>
<body class="bg-black text-white">
  <!-- Hero Section -->
  <section class="relative h-screen w-full overflow-hidden">
    <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
      <source src="/video/tes.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
      <div class="text-center">
        <h1 class="text-4xl md:text-6xl font-light tracking-widest uppercase">Disambiphotoworks</h1>
        <p class="mt-4 text-lg md:text-xl">Visual Storytelling Through the Lens</p>
      </div>
    </div>
  </section>

  <!-- Showreel Section -->
  <section class="py-20 px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-light mb-10 uppercase">Showreel</h2>
    <div class="max-w-4xl mx-auto">
      <div class="aspect-w-16 aspect-h-9">
        <iframe class="w-full h-full" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="py-20 px-6">
    <h2 class="text-3xl md:text-4xl font-light text-center mb-10 uppercase">Portfolio</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <img src="/images/nikah.jpg" class="w-full h-72 object-cover" alt="Photo 1">
      <img src="/images/nikah2.jpg" class="w-full h-72 object-cover" alt="Photo 2">
      <img src="/images/nikah3.jpg" class="w-full h-72 object-cover" alt="Photo 3">
      <img src="/images/nikah.jpg" class="w-full h-72 object-cover" alt="Photo 4">
      <img src="/images/nikah2.jpg" class="w-full h-72 object-cover" alt="Photo 5">
      <img src="/images/nikah3.jpg" class="w-full h-72 object-cover" alt="Photo 6">
    </div>
  </section>

  <!-- About Section -->
  <section class="py-20 px-6 bg-white text-black">
    <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <img src="/images/about.jpg" alt="About" class="rounded-xl">
      <div>
        <h2 class="text-3xl md:text-4xl font-light mb-4">About Disambiphotoworks</h2>
        <p class="text-lg leading-relaxed">We are a passionate visual production house based in Indonesia, specializing in cinematic storytelling through photography and film. Our mission is to capture timeless moments with authenticity and creativity.</p>
      </div>
    </div>
  </section>

  <!-- Contact & Footer -->
  <footer class="bg-black text-white py-10 text-center">
    <p class="mb-2">Let's collaborate on your next visual project</p>
    <a href="mailto:contact@disambiphotoworks.com" class="underline">contact@disambiphotoworks.com</a>
    <div class="mt-4 text-sm text-gray-400">&copy; 2025 Disambiphotoworks. All rights reserved.</div>
  </footer>
</body>
</html>