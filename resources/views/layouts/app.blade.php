<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sitio web básico @yield('title')</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

</head>
<body>

<div>
  <div class="bg-gray-800 pb-32">
    @include('layouts.header')
  </div>

  <main class="-mt-32">
    
    @include('shared.messages')

    <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="bg-white rounded-lg shadow px-5 py-6 sm:px-6" style="min-height: 500px;">
        <div class="rounded-lg">

            @yield('content')

        </div>
      </div>
      <!-- /End replace -->
    </div>
  </main>
</div>

   

    

    

</body>
</html>