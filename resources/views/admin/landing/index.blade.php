<x-app-layout>
    <form class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6" action="{{ route('landing.update', $landing->id) }}" method="POST">
        @csrf
        @method('PUT')
        <section class="p-4 sm:p-8 bg-white shadow rounded-lg">
            <div class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                {{ __('Landing') }}
            </div>
            <div class="flex flex-col md:flex-row flex-wrap gap-4">
                <input type="text" name="id" value="{{ old('id', optional($landing ?? null)->id) }}">
                <div class="flex-1">
                    <label for="title" class="block text-sm font-medium text-gray-700">{{ __('Judul') }}</label>
                    <input id="title" name="title" value="{{ old('title', optional($landing ?? null)->title) }}" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                    @error('title')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-wrap gap-4 mt-4">
                <div class="flex-1">
                    <label for="subtitle" class="block text-sm font-medium text-gray-700">{{ __('Subjudul') }}</label>
                    <input id="subtitle" name="subtitle" value="{{ old('subtitle', optional($landing ?? null)->subtitle) }}" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                    @error('subtitle')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-wrap gap-4 mt-4">
                <div class="flex-1">
                    <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    {{ old('description', optional($landing ?? null)->description) }}
                </textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </section>
        <section class="p-4 sm:p-8 bg-white shadow rounded-lg mt-4">
            <div class="flex flex-row gap-4 justify-end w-full">
                <button onclick="window.history.back();" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                    {{ __('Cancel') }}
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    {{ __('Update') }}
                </button>
            </div>
        </section>
    </form>
</x-app-layout>
