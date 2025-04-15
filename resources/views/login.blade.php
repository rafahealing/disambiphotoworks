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
    h1, h2, h3, h4 {
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
</head>
<body class="bg-cover bg-center min-h-screen" style="background-image: url('/images/sign.jpg');">

  <!-- Container -->
  <div class="flex items-center justify-center min-h-screen bg-black bg-opacity-10">

    <!-- Login Box -->
    <div class="relative z-10 w-full max-w-md p-8 bg-white bg-opacity-80 rounded-xl shadow-xl animate-fade-in" id="login-form">

      <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Hello!</h1>
      <p class="text-lg text-gray-600 text-center mb-8">Welcome to Disambiphotoworks</p>

      <!-- Login Form -->
      <form action="{{ route('login') }}" method="POST">
        @csrf

        <!-- Email Field -->
        <div class="mb-6">
          <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
          <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-3 mt-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none" required>
        </div>

        <!-- Password Field -->
        <div class="mb-6">
          <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
          <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-3 mt-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none" required>
        </div>

        <!-- Forgot Password Link -->
        <div class="mb-6 text-right">
          <a href="#" class="text-sm text-green-600 hover:underline">Forgot Password?</a>
        </div>

        <!-- Login Button -->
        <button type="submit" class="w-full px-4 py-3 bg-green-600 text-white rounded-lg font-semibold hover:bg-green-700 transition">Login</button>
      </form>

      <!-- Sign Up Link -->
      <div class="text-center text-sm mt-4">
        <span class="text-gray-500">Don't have an account?</span>
        <a href="{{ route('signup') }}" class="text-green-600 hover:underline">Sign Up</a>
        <span class="text-gray-500">Or back</span>
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
