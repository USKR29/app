<x-layout>
    <div class="bg-slate-200 p-4 sm:p-8 flex items-center justify-center min-h-screen">
         <div class="w-full max-w-2xl bg-white p-6 sm:p-8 rounded-2xl shadow-xl border border-gray-200">

        <!-- Form Heading -->
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6 text-center">
            Create a New Post
        </h1>
        <p class="text-gray-500 text-center mb-8">
            Fill in the details below to publish your new article.
        </p>

        <!-- The form itself -->
        <form id="postForm" class="space-y-6" enctype="multipart/form-data" action="{{route('create.post')}}" method="POST">
            @csrf

            <!-- Title Field -->
            <div class="flex flex-col">
                <label for="title" class="text-gray-700 font-medium text-lg mb-2">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    placeholder="Enter the post title..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-200 transition duration-300"
                    required
                >
            </div>

            <!-- Content Field -->
            <div class="flex flex-col">
                <label for="content" class="text-gray-700 font-medium text-lg mb-2">Content</label>
                <textarea
                    id="content"
                    name="content"
                    rows="8"
                    placeholder="Write your article content here..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-200 transition duration-300"
                    required
                ></textarea>
            </div>

            <!-- Image URL Field -->
            <div class="flex flex-col">
                <label for="image_url" class="text-gray-700 font-medium text-lg mb-2">Image URL</label>
                <input
                    type="file"
                    id="image_url"
                    name="image_url"
                    placeholder="Paste the image URL here..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-200 transition duration-300"
                >
                <p id="url_error" class="text-sm text-red-500 mt-2 hidden">Please enter a valid image URL.</p>
            </div>

            <!-- Image Preview -->
            <div id="imagePreviewContainer" class="hidden">
                <p class="text-gray-700 font-medium text-lg mb-2">Image Preview</p>
                <img
                    id="imagePreview"
                    src=""
                    alt="Image Preview"
                    class="w-full h-auto rounded-xl shadow-lg border border-gray-300"
                >
            </div>

            <!-- Form submission button -->
            <div>
                <button
                    type="submit"
                    class="w-full py-4 bg-blue-600 text-white text-xl font-semibold rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-200 transition duration-300 transform hover:scale-105"
                >
                    Publish Post
                </button>
            </div>

            @if ($errors->any())

            @foreach ($errors->all() as $item)
                <div class="bg-red-200 text-red-400">{{$item}}</div>
            @endforeach
                
            @endif

        </form>
    </div>
    </div>
   

</x-layout>