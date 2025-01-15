
<x-head/>
    <body class="h-full">
    <x-navbar :$heading/>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
          @foreach ($projects as $p)
            <x-project :name="$p->name" :description="$p->description"/>
          @endforeach
        </ul>
      </div>
    </main>
  </div>
  
  </body>
</html>