<x-head/>
    <body class="h-full">
    <x-navbar :$heading/>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        @vite(['resources/js/main.js'])
      </div>
    </main>
  
</html>
