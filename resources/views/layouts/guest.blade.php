<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiftly</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['Inter', 'sans-serif'],
            },
          }
        }
      }
    </script>
</head>
<body>
      <!-- Section: Design Block -->
  <section>
    <nav class="relative flex items-center justify-between w-full py-2 bg-white navbar navbar-expand-lg">
        <div class="flex flex-wrap items-center justify-between w-full px-6">
          <div class="flex items-center">
            <button
              class="py-3 mr-2 text-xl leading-none text-gray-600 transition-shadow duration-150 ease-in-out bg-transparent border-0 navbar-toggler lg:hidden hover:text-gray-700 focus:text-gray-700"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContentY"
              aria-controls="navbarSupportedContentY"
              aria-expanded="false"
              aria-label="Toggle navigation"
              id="hamburger"
            >
              <svg
                aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                class="w-5"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
              >
                <path
                  fill="currentColor"
                  d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                ></path>
              </svg>
            </button>
            <a class="text-blue-600 navbar-brand" href="/">
              <svg class="w-5 h-5 ml-2 mr-2 lg:ml-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M485.5 0L576 160H474.9L405.7 0h79.8zm-128 0l69.2 160H149.3L218.5 0h139zm-267 0h79.8l-69.2 160H0L90.5 0zM0 192h100.7l123 251.7c1.5 3.1-2.7 5.9-5 3.3L0 192zm148.2 0h279.6l-137 318.2c-1 2.4-4.5 2.4-5.5 0L148.2 192zm204.1 251.7l123-251.7H576L357.3 446.9c-2.3 2.7-6.5-.1-5-3.2z"></path>
              </svg>
            </a>
          </div>
          <div class="items-center navbar-collapse collapse grow" id="navbarSupportedContentY">
            <ul class="pl-4 mr-auto navbar-nav lg:flex lg:flex-row gap-x-2">
              <li class="nav-item">
                <a class="block py-2 pr-4 text-gray-600 transition duration-150 ease-in-out nav-link lg:px-2 hover:text-gray-700 focus:text-gray-700" href="/shifts" data-mdb-ripple="true" data-mdb-ripple-color="light">View Shifts</a>
              </li>
              <li class="nav-item">
                <a class="block py-2 pr-4 text-gray-600 transition duration-150 ease-in-out nav-link lg:px-2 hover:text-gray-700 focus:text-gray-700" href="/wages" data-mdb-ripple="true" data-mdb-ripple-color="light">Wages Breakdown</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')
      {{-- {{ $slot }} --}}
      <footer class="absolute inset-x-0 bottom-0 text-center bg-white lg:text-left">
        <div class="p-4 text-center text-gray-700" style="background-color: rgba(0, 0, 0, 0.02;">
          © 2021 Copyright:
          <a class="text-gray-800" href="https://tailwind-elements.com/">Shiftly</a>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    </body>
</html>
