<!-- resources/views/menus/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu List') }}
        </h2>
    </x-slot>
    <a href="{{ route('menus.create') }}" class="btn btn-primary">Add Menu</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Route</th>
                <th>Icon</th>
                <th>Method</th>
                <th>view name</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->route }}</td>
                    <td>{{ $menu->icon }}</td>
                    <td>{{ $menu->method }}</td>
                    <td>{{ $menu->view_name }}</td>
                    <td>{{ $menu->order }}</td>
                    <td>
                        <a href="{{ route('menus.edit', $menu) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('menus.destroy', $menu) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
