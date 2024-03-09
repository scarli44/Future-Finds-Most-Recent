<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
<body class=" bg-gradient-to-r from-emerald-400 to-cyan-400">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="md:flex md:items-center md:gap-12">
        <a class="block text-white" href="/">
          <span class="sr-only">Home</span>
          <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
              fill="currentColor"
            />
          </svg>
        </a>
      </div>

      <div class="hidden md:block">

        <nav aria-label="Global">

        <!-- <div class = "bg-opacity-30 rounded bg-gray-800  border-white"> -->
        <div class="flex items-center justify-center h-screen">
          <ul class="flex gap-2 items-center text-sm">

            <li>
              <a class=" text-white text-lg px-5 py-2.5 font-medium " href="/checkout">Checkout </a>
            </li>

            <li>
                <a class=" text-white text-lg px-5 py-2.5 font-medium" href="/login"> Login </a>
            </li>

            <li>
            <a class=" text-white text-lg px-5 py-2.5 font-medium " href="/register">Register </a>
            </li>

            <li>
            <a class=" text-white text-lg px-5 py-2.5 font-medium " href="/About">About</a>
            </li>
          </ul>
          </div>
        </nav>


        <div class="block md:hidden">
          <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</body>

<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <div class="grid grid-cols-1 gap-2 lg:grid-cols-1 lg:items-stretch">
        <!--************* First Rectangle with low Opacity *************-->
        <div class=" place-content-center rounded-xl bg-white bg-opacity-30 p-8 sm:p-8">
        <div class="mx-auto max-w-screen-2xl text-center lg:text-left">
          <header>

            <h2 class=" text-center text-white text-l font-bold  sm:text-3xl lg:text-3xl ">Future Finds</h2>

            <p class="  text-center text-white text-xl items-center mt-6">
            Welcome to Future Finds, the go-to destination for the latest and greatest in technological innovations.
            At our core, we are driven by a passion for discovering and delivering a diverse range of top-tier tech
            products, from *** ADD LATER ****
            </p>
          </header>
         <div class = "text-center">
          <a href="#" class=" mt-4 inline-block rounded border border-gray-900 border-opacity-20 bg-white px-14 py-3 text-sm
             font-medium text-black transition hover:shadow focus:outline-none focus:ring"> About </a>
        </div>
      </div>
</div>

      <section>
  <div class="px-4 py-8 sm:px-4 sm:py-8 lg:px-4 lg:py-8">
    <!-- ************ Second Rectangle with low opacity ************ -->
    <div class="rounded-xl bg-white bg-opacity-30 p-8 sm:p-8 sm:px-12">

    <ul class="mt-8 grid gap-10 sm:grid-cols-2 lg:grid-cols-2 p">
        <!--  ************** First Product ************** -->
    <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
            alt=""
            class=" rounded-tl-2xl rounded-tr-2xl h-400px w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"/>
          <div class="relative rounded-bl-lg rounded-br-lg bg-white pt-3">
            <h3 class="pl-5 text-lg font-semibold tracking-tight text-gray-900 dark:text-white group-hover:underline group-hover:underline-offset-4">
                    Product Name
            </h3>



              <!-- Example of a modern and stylish font design using Tailwind CSS -->



              <p class="mt-5">
              <span class="sr-only"> Regular Price </span>
              <div class="pb-3 pl-5 tracking-wider text-gray-900"> Price </div>
            </p>
          </div>
        </a>
      </li>
        <!--  ************** Second Product ************** -->
      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
            alt=""
            class="rounded-tl-2xl rounded-tr-2xl h-400px w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
          />

          <div class="relative rounded-bl-lg rounded-br-lg bg-white pt-3">
            <h3 class="text-base text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Product Name #2
            </h3>

            <p class="mt-5">
              <span class="sr-only"> Regular Price </span>

              <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
            </p>
          </div>
        </a>
      </li>
      <!--  ************** Third Product ************** -->
      <li>
        <a href="#" class="rounded-tl-xl rounded-tr-xl group block overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
            alt=""
            class=" rounded-tl-2xl rounded-tr-2xl h-400px w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
          />

          <div class="relative rounded-bl-lg rounded-br-lg bg-white pt-3">
            <h3 class="text-base text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Product Name #3
            </h3>

            <p class="mt-5">
              <span class="sr-only"> Regular Price </span>
              <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
            </p>
          </div>
        </a>
      </li>
      <!--  ************** Fourth Product ************** -->
      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
            alt=""
            class="rounded-tl-2xl rounded-tr-2xl h-400px w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
          />

          <div class="relative rounded-bl-lg rounded-br-lg bg-white pt-3">
            <h3 class="text-base text-gray-700 group-hover:underline group-hover:underline-offset-4">
            Product Name #4
            </h3>
            <p class="mt-5">
              <span class="sr-only"> Regular Price </span>

              <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
            </p>
          </div>
        </a>
      </li>
    </ul>
  </div>
  </div>
</section>
    </div>
  </div>
</section>
