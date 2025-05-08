<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up | Disambiphotoworks</title>
  <script src="https://cdn.tailwindcss.com"></script>
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

    /* Custom transition for fade-in effect */
    .animate-fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease-in-out;
    }

    .fade-in-active {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
  @vite([])
</head>

<body class="bg-cover bg-center min-h-screen" style="background-image: url('/images/login.jpg')">

  <!-- Container to Center the Form Box -->
  <div class="flex items-center justify-center min-h-screen">

    <!-- Form Box -->
    <div class="relative z-10 w-full max-w-md p-8 bg-white bg-opacity-80 rounded-xl shadow-xl animate-fade-in" id="signup-form">

      <!-- Logo and Title -->
      <div class="text-center mb-8">
        <h1 class="text-3xl font-semibold text-gray-800">Buat Akun</h1>
        <p class="text-lg text-gray-600">Bergabunglah dengan kami dan mulailah mengabadikan momen-momen indah.</p>
      </div>

      <!-- Sign Up Form -->
      <form action="{{ route('register.post') }}" method="POST">
        @if ($errors->any())
        <div class="mb-4 text-red-600">
          <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @csrf

        <!-- Name Field -->
        <div class="mb-6">
          <label for="name" class="block text-sm font-semibold text-gray-700">Nama</label>
          <input type="text" name="name" id="name" placeholder="Full Name" value="{{ old('name') }}"
            class="w-full px-4 py-3 mt-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none"
            required>
        </div>

        <!-- Nomor HP Field -->
        <div class="mb-6">
          <label for="phone" class="block text-sm font-semibold text-gray-700">Nomor HP</label>
          <input type="text" name="phone" id="phone" placeholder="08xxxxxxxxxx" value="{{ old('phone') }}"
            class="w-full px-4 py-3 mt-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none"
            required>
        </div>


        <!-- Password Field -->
        <div class="mb-6">
          <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
          <input type="password" name="password" id="password" placeholder="Password" value="{{ old('password') }}"
            class="w-full px-4 py-3 mt-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none"
            required>
        </div>

        <!-- Confirm Password Field -->
        <div class="mb-6">
          <label for="password_confirmation" class="block text-sm font-semibold text-gray-700">Konfirmasi Password</label>
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}"
            class="w-full px-4 py-3 mt-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none"
            required>
        </div>

        <!-- Register Button -->
        <button type="submit"
          class="w-full px-4 py-3 bg-green-600 text-white rounded-lg font-semibold hover:bg-green-700 transition">Register</button>

        <!-- Footer (Optional) -->
        <div class="text-center mt-6 text-sm text-gray-600">
          <span>Sudah memiliki akun? </span><a href="{{ route('login') }}" class="text-green-600 hover:underline">Login</a>
          <span class="text-gray-500">Or</span>
          <a href="{{ route('home') }}" class="text-green-600 hover:underline">Kembali ke Home</a>
        </div>

    </div>
  </div>


  <!-- JavaScript for Animations -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const formContainer = document.getElementById('signup-form');
      formContainer.classList.add('fade-in-active');
    });
  </script>

</body>

</html>