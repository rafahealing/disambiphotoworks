<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Disambiphotoworks</title>
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

<body class="bg-cover bg-center min-h-screen" style="background-image: url('/images/sign.jpg');">

  <!-- Container -->
  <div class="flex items-center justify-center min-h-screen bg-black bg-opacity-10">

    <!-- Login Box -->
    <div class="relative z-10 w-full max-w-md p-8 bg-white bg-opacity-80 rounded-xl shadow-xl animate-fade-in" id="login-form">

      <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Hello!</h1>
      <p class="text-lg text-gray-600 text-center mb-8">Selamat Datang di Disambiphotoworks</p>

      <!-- Login Form -->
      <form action="{{ route('login') }}" method="POST">
        @if ($errors->any())
        <div class="mb-4 text-red-600">
          {{ $errors->first() }}
        </div>
        @endif

        @if(session('success'))
        <div class="mb-4 text-green-600">
          {{ session('success') }}
        </div>
        @endif
        @csrf

        <!-- Email Field -->
        <div class="mb-6">
          <label for="phone" class="block text-sm font-semibold text-gray-700">phone</label>
          <input type="phone" name="phone" id="phone" placeholder="phone" class="w-full px-4 py-3 mt-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none" required value="{{ old('email') }}">
        </div>

        <!-- Password Field -->
        <div class="mb-6">
          <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
          <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-3 mt-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none" required value="{{ old('password') }}">
        </div>

        <!-- Login Button -->
        <button type="submit" class="w-full px-4 py-3 bg-green-600 text-white rounded-lg font-semibold hover:bg-green-700 transition">Login</button>
      </form>

      <!-- Sign Up Link -->
      <div class="text-center text-sm mt-4">
        <span class="text-gray-500">Tidak memiliki akun?</span>
        <a href="{{ route('signup') }}" class="text-green-600 hover:underline">Sign Up</a>
        <span class="text-gray-500">atau kembali</span>
        <a href="{{ route('home') }}" class="text-green-600 hover:underline">Home</a>
      </div>

    </div>
  </div>

  <!-- JavaScript for Animations -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const formContainer = document.getElementById('login-form');
      formContainer.classList.add('fade-in-active');
    });
  </script>

</body>

</html>