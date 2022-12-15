<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Alle posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Page starts here --}}

                    {{-- Success message --}}
                    @if(session('success'))
                        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    {{-- Loop through all posts from user --}}
                    @foreach($posts as $post)
                    {{-- Post --}}
                    <div class="block m-auto mb-8 w-9/12 p-6 bg-white border border-gray-200 rounded-lg shadow-md">
                        <div class="ml-8 mr-8">
                            {{-- Subject and name --}}
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post->subject }}</h5>
                            {{-- Content --}}
                            <p class="mb-2 text-gray-700 border-b-2 border-gray-300">{{ $post->content }}</p>
                            @if($post->comments->count() > 0)
                                @foreach($post->comments as $comment)
                                    {{-- Comments of post --}}
                                    <div class="ml-16">
                                        {{-- Name of commenter --}}
                                        <h6 class="text-sm font-bold tracking-tight text-gray-900">{{ $comment->user->name }}</h6>
                                        {{-- Content of comment --}}
                                        <p class="mb-2 text-gray-700 border-b-2 border-gray-200">{{ $comment->content }}</p>
                                    </div>
                                @endforeach
                            @else
                                <div class="ml-16">
                                    <p class="mb-2 text-gray-700 border-b-2 border-gray-200">No comments yet</p>
                                </div>       
                            @endif
                            {{-- Edit button --}}
                            <form action="{{ route('edit', $post->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="mb-2 mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Edit post</button>
                            </form>
                            {{-- Delete button --}}
                            <form action="{{ route('deletePost', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <button type="submit" class="mb-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Delete post</button>
                            </form>
                        </div>
                    </div>
                    {{-- End of post --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
