<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guest') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-4 md:gap-6">
                @include('layouts.menus')
                <div class="mt-5 md:mt-0 md:col-span-3">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            @if (session()->has('message'))
                                <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 " role="alert">
                                    <p class="font-bold">Informational message</p>
                                    <p class="text-sm">{{ session('message') }}</p>
                                </div>
                            @endif

                            <livewire:show-hide />
                            <br>
                            @if ($guests->count())
                                <table class="table-auto mt-12">
                                    <thead>
                                    <tr>
                                        <th class="border px-4 py-2">Guest Name</th>
                                        <th class="border px-4 py-2">Contact</th>
                                        <th class="border px-4 py-2">Check In Date</th>
                                        <th class="border px-4 py-2">Room Type</th>
                                        <th class="border px-4 py-2">Room No</th>
                                        <th class="border px-4 py-2">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($guests as $guest)
                                        <tr>
                                            <td class="border px-4 py-2">{{$guest->guest_name}}</td>
                                            <td class="border px-4 py-2">{{$guest->contact}}</td>
                                            <td class="border px-4 py-2">{{$guest->check_in_date}}</td>
                                            <td class="border px-4 py-2">{{$guest->room_type}}</td>
                                            <td class="border px-4 py-2">{{$guest->room_number}}</td>
                                            <td class="border px-4 py-2">
                                                <div class="inline-flex">
                                                    <a href="{{url('guest/'.$guest->id . '/edit')}}"
                                                       class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                                        Edit
                                                    </a>
                                                    <a href="{{url('guest/'.$guest->id)}}"
                                                    class="bg-blue-300 hover:bg-blue-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                                        Invoice
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
