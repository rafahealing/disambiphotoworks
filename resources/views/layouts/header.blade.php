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
    <nav id="menu" class="hidden md:flex space-x-6 items-center">
  <a href="{{ route('home') }}" class="hover:text-green-600 text-gray-800">Home</a>

  <!-- Portofolio dengan Dropdown -->
  <div class="relative">
    <button id="portfolio-btn" class="hover:text-green-600 text-gray-800 flex items-center space-x-2">
      <span>Portofolio</span>
      <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <!-- Dropdown Menu -->
    <div id="portfolio-dropdown" class="absolute hidden bg-white shadow-lg rounded-lg mt-2 w-25 py-2 text-gray-800">
      <a href="{{ route('wedding') }}" class="block px-4 py-2 hover:bg-green-100">Weddings</a>
    </div>
  </div>

  <a href="{{ route('user.booking') }}" class="hover:text-green-600 text-gray-800">Booking</a>

  @guest
    <a href="{{ route('register') }}" class="hover:text-green-600 text-gray-800">Sign Up</a>
    <a href="{{ route('login') }}" class="hover:text-green-600 text-gray-800">Login</a>
  @endguest

  @auth
    <a class="hover:text-green-600 text-gray-800">{{ Auth::user()->name }}</a>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="hover:text-red-600 text-gray-800">Logout</button>
    </form>
  @endauth

  <a href="#contact" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Tanya Admin</a>
</nav>

<!-- Mobile Menu (Dropdown) -->
<div id="mobile-menu" class="md:hidden hidden px-6 pb-4">
  <a href="#about" class="block py-2 text-gray-800 hover:text-green-600">Home</a>

  <!-- Mobile version of the Portfolio Dropdown -->
  <div class="relative">
    <button id="mobile-portfolio-btn" class="block py-2 text-gray-800 hover:text-green-600 items-center space-x-2">
      <span>Portofolio</span>
      <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <div id="mobile-portfolio-dropdown" class="hidden bg-white shadow-lg rounded-lg mt-2 w-48 py-2 text-gray-800">
      <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-green-100">Portfolio 1</a>
      <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-green-100">Portfolio 2</a>
      <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-green-100">Portfolio 3</a>
    </div>
  </div>

  <a href="{{ route('user.booking') }}" class="block py-2 text-gray-800 hover:text-green-600">Booking</a>

  @guest
    <a href="{{ route('register') }}" class="block py-2 text-gray-800 hover:text-green-600">Sign Up</a>
    <a href="{{ route('login') }}" class="block py-2 text-gray-800 hover:text-green-600">Login</a>
  @endguest

  @auth
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="block py-2 text-left w-full text-gray-800 hover:text-red-600">Logout</button>
    </form>
  @endauth

  <a href="#contact" class="block py-2 bg-green-600 text-white rounded hover:bg-green-700 text-center">Hubungi Kami</a>
</div>

<script>
  // Toggle dropdown for desktop view
  const portfolioBtn = document.getElementById('portfolio-btn');
  const portfolioDropdown = document.getElementById('portfolio-dropdown');

  portfolioBtn.addEventListener('click', () => {
    portfolioDropdown.classList.toggle('hidden');
  });

  // Toggle dropdown for mobile view
  const mobilePortfolioBtn = document.getElementById('mobile-portfolio-btn');
  const mobilePortfolioDropdown = document.getElementById('mobile-portfolio-dropdown');

  mobilePortfolioBtn.addEventListener('click', () => {
    mobilePortfolioDropdown.classList.toggle('hidden');
  });
</script>


  <script>
    const toggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</header>