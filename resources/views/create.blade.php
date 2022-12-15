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

                    {{-- Error messages --}}
                    @if ($errors->any())
                        <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">There are some errors with your input.</span>
                            <ul class="mt-3 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li class="text-sm">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Create form --}}
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        {{-- Subject input --}}
                        <div class="mb-6">
                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
                            <input type="text" id="subject" name="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        {{-- Content input --}}
                        <div class="mb-6">
                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Content</label>
                            <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>

                        {{-- Submit button --}}
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create post</button>
                    </form>
                    {{-- End of create form --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
