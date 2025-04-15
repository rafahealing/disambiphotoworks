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
<body class="bg-cover bg-center min-h-screen" style="background-image: url('/images/login.jpg')">

  <!-- Container to Center the Form Box -->
  <div class="flex items-center justify-center min-h-screen">

    <!-- Form Box -->
    <div class="relative z-10 w-full max-w-md p-8 bg-white bg-opacity-80 rounded-xl shadow-xl animate-fade-in" id="signup-form">

      <!-- Logo and Title -->
      <div class="text-center mb-8">
        <h1 class="text-3xl font-semibold text-gray-800">Create Account</h1>
        <p class="text-lg text-gray-600">Join us and start capturing beautiful moments.</p>
      </div>

      <!-- Sign Up Form -->
      <form action="{{ route('signup') }}" method="POST">
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

        <!-- Confirm Password Field -->
        <div class="mb-6">
          <label for="confirm_password" class="block text-sm font-semibold text-gray-700">Confirm Password</label>
          <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="w-full px-4 py-3 mt-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none" required>
        </div>

        <!-- Phone Field -->
        <div class="mb-6">
          <label for="phone" class="block text-sm font-semibold text-gray-700">Phone</label>
          <input type="text" name="phone" id="phone" placeholder="Phone Number" class="w-full px-4 py-3 mt-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none" required>
        </div>

        <!-- Sign Up Button -->
        <button type="submit" class="w-full px-4 py-3 bg-green-600 text-white rounded-lg font-semibold hover:bg-green-700 transition">Sign Up</button>
      </form>

      <!-- Footer (Optional) -->
  <div class="text-center mt-6 text-sm text-gray-600">
    <span>Already have an account? </span><a href="{{ route('login') }}" class="text-green-600 hover:underline">Login</a>
    <span class="text-gray-500">Or back</span>
        <a href="{{ route('home') }}" class="text-green-600 hover:underline">Home</a>
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
