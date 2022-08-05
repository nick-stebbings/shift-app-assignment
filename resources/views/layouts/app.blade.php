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
    <nav class="relative flex items-center justify-between w-full py-2 mt-2 bg-white navbar navbar-expand-lg">
        <div class="flex flex-wrap items-center justify-between w-full px-6">
          <div class="flex items-center gap-x-2">
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
              <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-shift" viewBox="0 0 16 16">
                  <path d="M7.27 2.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v3a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-3H1.654C.78 10.5.326 9.455.924 8.816L7.27 2.047zM14.346 9.5 8 2.731 1.654 9.5H4.5a1 1 0 0 1 1 1v3h5v-3a1 1 0 0 1 1-1h2.846z"/>
                </svg><span>shiftly</span>
              </div>
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
              <li class="nav-item">
                <a class="block py-2 pr-4 text-gray-600 transition duration-150 ease-in-out nav-link lg:px-2 hover:text-gray-700 focus:text-gray-700" href="/profile/update" data-mdb-ripple="true" data-mdb-ripple-color="light">Update Profile</a>
              </li>
            </ul>
          </div>
          <div class="flex items-center lg:ml-auto">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="inline-block ml-4 mt-2 px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Logout</button>
            </form>
          </div>
        </div>
      </nav>
   
   @yield('content')
   {!! Session::get("msg", '') !!}
     
      <footer class="absolute inset-x-0 bottom-0 text-center bg-white lg:text-left">
        <div class="p-4 text-center text-gray-700" style="background-color: rgba(0, 0, 0, 0.02;">
          © 2021 Copyright:
          <a class="text-gray-800" href="https://tailwind-elements.com/">Shiftly</a>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    </body>
</html>
