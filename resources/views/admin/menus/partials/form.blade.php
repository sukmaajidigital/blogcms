<section class="p-4 sm:p-8 bg-white shadow rounded-lg">
    <div class="mb-3">
        <label for="name" class="block text-sm font-medium text-gray-700">Menu Name</label>
        <input type="text" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="name" value="{{ isset($menu) ? $menu->name : '' }}" required>
    </div>
    <div class="mb-3">
        <label for="route" class="block text-sm font-medium text-gray-700">Route</label>
        <input type="text" name="route" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="route" value="{{ isset($menu) ? $menu->route : '' }}" required>
    </div>
    <div class="mb-3">
        <label for="icon" class="block text-sm font-medium text-gray-700">Icon</label>
        <input type="text" name="icon" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="icon" value="{{ isset($menu) ? $menu->icon : '' }}">
    </div>
    <div class="mb-3">
        <label for="order" class="block text-sm font-medium text-gray-700">Order</label>
        <input type="number" name="order" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="order" value="{{ isset($menu) ? $menu->order : '0' }}">
    </div>
    <div class="mb-3">
        <label for="method" class="block text-sm font-medium text-gray-700">Method</label>
        <select name="method" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="method" required>
            <option value="GET" {{ isset($menu) && $menu->method == 'GET' ? 'selected' : '' }}>GET</option>
            <option value="POST" {{ isset($menu) && $menu->method == 'POST' ? 'selected' : '' }}>POST</option>
            <option value="PUT" {{ isset($menu) && $menu->method == 'PUT' ? 'selected' : '' }}>PUT</option>
            <option value="DELETE" {{ isset($menu) && $menu->method == 'DELETE' ? 'selected' : '' }}>DELETE</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="view_name" class="block text-sm font-medium text-gray-700">View Name</label>
        <input type="text" name="view_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="view_name" value="{{ isset($menu) ? $menu->view_name : '' }}" placeholder="e.g., menus.show">
    </div>
</section>
<section class="p-4 sm:p-8 bg-white shadow rounded-lg mt-4">
    <div class="flex flex-row gap-4 justify-end w-full">
        <button onclick="window.history.back();" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
            {{ __('Cancel') }}
        </button>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            {{ isset($menu) ? __('Update') : __('Save') }}
        </button>
    </div>
</section>
