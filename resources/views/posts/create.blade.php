<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="mt-4">
                            <label for="title">{{ __('Title') }}</label>

                            <input type="text" name="title" id="title"
                                   value="{{ old('title') }}"
                                   class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="content">{{ __('Content') }}</label>

                            <textarea name="content" id="content" rows="5"
                                      class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('content') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <label for="slug">{{ __('Slug') }}</label>

                            <input type="text" name="slug" id="slug"
                                   value="{{ old('slug') }}"
                                   class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus />
                        </div>

                        <div class="flex items-center mt-4">
                            <x-button>
                                {{ __('Save Post') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
