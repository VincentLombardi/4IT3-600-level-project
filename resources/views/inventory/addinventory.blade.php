<x-app-layout title="Add Inventory">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Inventory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ url('store-inventory') }}">
                        @csrf

                        <div class="flex justify-center items-center py-2">
                            <h1 class="text-gray-700 font-bold underline">Add New Item</h1>
                        </div>

                        <div class="grid grid-cols-1 gap-2">
                            <x-label class="block">
                                <span class="text-gray-700">Item Name</span>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50mt-1 block w-full @error('name') border-red-600 border-2 @enderror rounded-md bg-gray-100 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="">
                                @error('name')
                                <div class="text-red-600 mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </x-label>

                            <label class="block">
                                <span class="text-gray-700">Quantity</span>
                                <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" class="mt-1 block w-full @error('quantity') border-red-600 border-2 @enderror rounded-md bg-gray-100 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="">
                                @error('quantity')
                                <div class="text-red-600 mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Units</span>
                                <select id="units" name="units" value="{{ old('units') }}" class="block w-full @error('units') border-red-600 border-2 @enderror mt-1 rounded-md bg-gray-100 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Select">>
                                    <option value="" disabled selected>Select an option</option>
                                    <option>ea.</option>
                                    <option>lbs</option>
                                    <option>ft</option>
                                    <option>oz</option>
                                    <option>Other</option>
                                </select>
                                @error('units')
                                <div class="text-red-600 mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Purchase Date</span>
                                <input type="date" id="purchasedate" name="purchasedate" value="{{ old('purchasedate') }}" class="mt-1 block w-full @error('purchasedate') border-red-600 border-2 @enderror rounded-md bg-gray-100 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @error('date')
                                <div class="text-red-600 mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </label>

                            <x-label class="block">
                                <span class="text-gray-700">Additional details</span>
                                <textarea id="notes" name="notes" value="{{ old('notes') }}" class="mt-1 block w-full rounded-md bg-gray-100 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3"></textarea>
                            </x-label>
                        </div>
                        <div class="flex justify-end items-center py-3">
                            <x-button class="ml-3 bg-gray-800">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
