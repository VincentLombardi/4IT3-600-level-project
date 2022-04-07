<x-app-layout title="Completed Orders">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Completed Orders') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-xl pb-3 ">
                                <x-heroicon-s-check-circle class="inline-block h-8"/> Completed Orders
                            </p>
                        </div>
                        <div class="pb-3">
                            <x-button onclick="location.href='{{ route('add-order') }}'" class="ml-1 bg-green-600 hover:bg-green-300">
                                {{ __('Add Order')}}
                            </x-button>

                            <x-button form="boxes" class="ml-1 bg-red-600 hover:bg-red-300">
                                {{ __('Remove Order')}}
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
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Order ID</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Batch</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">User</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Start Date</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Finish Date</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Creation Date & Time</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-700">
                            <form id="boxes" method="GET" action="{{route('remove-multi-order')}}">
                                @foreach($orders as $value)
                                    @if ($value->status == 'Finished')
                                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-200">

                                            <td class="text-left px-4">
                                                <x-input type="checkbox" name="list[]" value="{{$value->id}}"  class="form-checkbox h-5 w-5 text-gray-800"/>
                                            </td>

                                            <td class="text-left py-3 px-4">{{ $value->id}}</td>
                                            <td class="text-left py-3 px-4">{{ $value->name }}</td>
                                            <td class="text-left py-3 px-4">{{ $value->batch }}</td>
                                            <td class="text-left py-3 px-4">{{ $value->orderedby }}</td>
                                            <td class="text-left py-3 px-4">{{ $value->startdate }}</td>
                                            <td class="text-left py-3 px-4">{{ $value->enddate }}</td>
                                            <td class="text-left py-3 px-4">{{ $value->created_at}}</td>
                                            <td class="text-left py-3 px-4">{{ $value->status }}</td>
                                            <td>
                                                <div class="flex justify-left items-center">

                                                    <x-button type="text" class="ml-1 bg-yellow-500 hover:bg-yellow-300"><a
                                                            href="{{ route('edit-order', $value->id) }}">
                                                            {{ __('Edit') }}
                                                        </a></x-button>
                                                    <x-button type="text" class="ml-1 bg-red-600 hover:bg-red-300"><a
                                                            href="{{ route('remove-order', $value->id) }}">
                                                            {{ __('Delete') }}
                                                        </a></x-button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
