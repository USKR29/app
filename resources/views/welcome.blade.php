<x-layout>


    <div class="grid grid-cols-3">

            @foreach ($posts as $post)

             <div class="max-w-sm mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl transform hover:scale-105 transition duration-300 ease-in-out">
  <div class="md:flex">
    <div class="md:shrink-0">
      <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{$post->image_url}}" alt="Blog post image">
    </div>
    <div class="p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Lifestyle</div>
      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{$post->title}}</a>
      <p class="mt-2 text-slate-500">{{Str::limit($post->content,150)}}</p>
      <div class="mt-4 flex items-center text-sm text-gray-500">
        <span class="font-semibold text-gray-700">Jane Doe</span>
        <span class="mx-2">•</span>
        <span>{{$post->created_at->format('M/d/Y')}}</span>
      </div>
    </div>
  </div>
</div>
                
            @endforeach

       


    </div>



</x-layout>