<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-4 md:gap-6">
                @include('layouts.menus')
                <div class="mt-5 md:mt-0 md:col-span-3">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
