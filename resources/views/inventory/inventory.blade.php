<x-app-layout title="Inventory">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventory') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between">
                    <div>
                        <p class="text-xl pb-3 ">
                            <x-heroicon-o-clipboard-list class="inline-block h-8"/> Current Inventory
                        </p>
                    </div>
                    <div class="pb-3">
                        <x-button class="ml-1 bg-green-600 hover:bg-green-300" onclick="location.href='{{ route('add-inventory') }}'">
                            {{ __('Add Inventory')}}
                        </x-button>

                        <x-button form="boxes" class="ml-1 bg-red-600 hover:bg-red-300">
                            {{ __('Remove Inventory')}}
                        </x-button>

                    </div>
                </div>
                <div class="rounded bg-white overflow-auto">
                    <table class="min-w-full bg-white border-2">
                        <thead class="bg-gray-800 text-white">
                        <tr>
                            <td class="text-left px-4"><input type="checkbox" name="selectall"
                                                              class="form-checkbox h-5 w-5 text-gray-800"></label>
                            </td>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Inventory ID</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Quantity</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Units</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Purchase Date</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">User</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Creation Date & Time</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach($inventory as $value)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-200">

                                        <td class="text-left px-4">
                                            <x-input type="checkbox" name="list[]" value="{{$value->id}}"  class="form-checkbox h-5 w-5 text-gray-800"/>
                                        </td>

                                        <td class="text-left py-3 px-4">{{ $value->id }}</td>
                                        <td class="text-left py-3 px-4">{{ $value->name }}</td>
                                        <td class="text-left py-3 px-4">{{ $value->quantity }}</td>
                                        <td class="text-left py-3 px-4">{{ $value->units }}</td>
                                        <td class="text-left py-3 px-4">{{ $value->purchasedate }}</td>
                                        <td class="text-left py-3 px-4">{{ $value->importedby }}</td>
                                        <td class="text-left py-3 px-4">{{ $value->created_at}}</td>
                                        <td>
                                            <div class="flex justify-left items-center">

                                                <x-button type="text" class="ml-1 bg-yellow-500 hover:bg-yellow-300"><a
                                                        onclick="location.href='{{ route('edit-inventory', $value->id) }}'">
                                                        {{ __('Edit') }}
                                                    </a></x-button>
                                                <x-button type="text" class="ml-1 bg-red-600 hover:bg-red-300"><a
                                                        onclick="location.href='{{ route('remove-inventory', $value->id) }}'">
                                                        {{ __('Delete') }}
                                                    </a></x-button>
                                            </div>
                                        </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
