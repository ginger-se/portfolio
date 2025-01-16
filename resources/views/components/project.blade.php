
    <li class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow">
      <div class="flex flex-1 flex-col p-8">
        <img class="mx-auto size-32 shrink-0 rounded-full" src="{{Vite::asset($img)}}" alt="img not found">
        <h3 class="mt-6 text-sm font-medium text-gray-900">{{$name}}</h3>
        <dl class="mt-1 flex grow flex-col justify-between">

          <dd class="text-sm text-gray-500">{{$description}}</dd>

          
        </dl>
        <a href="{{$link}}" class="to-blue-500">Try it!</a>
      </div>
      <div>
        
      </div>
    </li>
  

  