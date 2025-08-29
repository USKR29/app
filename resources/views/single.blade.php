<x-layout>
    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden my-8">
  <div class="w-full">
    <img class="w-full object-cover md:h-96" src="{{ Storage::url($post->image_url)}}" alt="Blog post image">
  </div>
  <div class="p-8">
    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Lifestyle</div>
    <h1 class="block mt-1 text-4xl leading-tight font-bold text-black">{{ $post->title }}</h1>
    <div class="mt-4 flex items-center text-sm text-gray-500">
      <span class="font-semibold text-gray-700">{{ $post->user->name }}</span>
      <span class="mx-2">•</span>
      <span>{{ $post->created_at->format('M d, Y') }}</span>
    </div>
    <div class="mt-6 text-slate-700 leading-relaxed">
      <p>{{ $post->content }}</p>
    </div>
    @auth
        <form method="POST" action="{{route('delete',$post->id)}}">
        @csrf
        @method('DELETE')
        <button type="submit">🗑️</button>
    </form>
    @endauth
    
  </div>
  
</div>
</x-layout>