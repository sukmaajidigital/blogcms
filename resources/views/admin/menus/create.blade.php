<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('add Menu') }}
        </h2>
    </x-slot>
    <form action="{{ route('menus.store') }}" method="POST" class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        @csrf
        @include('admin.menus.partials.form')
    </form>
</x-app-layout>
