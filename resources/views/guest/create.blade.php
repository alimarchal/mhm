<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Guest') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-4 md:gap-6">
                @include('layouts.menus')
                <div class="mt-5 md:mt-0 md:col-span-3">
                    <form action="{{url('guest')}}" class=" shadow overflow-hidden sm:rounded-mdpx-4 py-5 bg-white sm:p-6" method="post">
                        @csrf
                        <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                                        Guest Name
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                        id="grid-first-name" type="text" placeholder="Guest Name" name="guest_name">
                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                                        Father Name
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-last-name" type="text" placeholder="Doe" name="father_husband_name">
                                </div>
                            </div>
                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                        Number of Guest
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                        id="grid-first-name" type="number" name="number_of_guests">
                                </div>
                                <div class="md:w-1/3 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                        CNIC
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        type="text" name="cnic">
                                </div>
                                <div class="md:w-1/3 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                        Contact
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        type="text" name="contact">
                                </div>
                            </div>

                            <div class="-mx-3 md:flex mb-2">
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                        Address
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-city" type="" name="address">
                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                                        Room Type
                                    </label>
                                    <div class="relative">
                                        <select
                                            class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                            id="grid-state" name="room_type">
                                            <option>Standard</option>
                                            <option>Delux</option>
                                        </select>
                                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                                        Room No
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-zip" type="text" name="room_number">
                                </div>
                                <div class="md:w-1/4 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                                        Vehicle No
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-zip" type="text" name="vehicle_no">
                                </div>
                            </div>
                            <div class="-mx-3 md:flex mt-4">
                                <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                        Checked In Date
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-city" type="date" name="check_in_date">
                                </div>
                                <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                        Checked Out Date
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-city" type="date" name="check_out_date">
                                </div>
                                <div class="md:w-1/3 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                                        Remarks
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-zip" type="text" name="remarks">
                                </div>
                            </div>

                            <div class="-mx-3 md:flex mt-6">
                                <div class="md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                                        Discount Type
                                    </label>
                                    <div class="relative">
                                        <select
                                            class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                            id="discount_type" name="discount_type">
                                            <option value="None">None</option>
                                            <option value="Fixed">Fixed</option>
                                            <option value="Percentage">Percentage %</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                        Discount
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-city" type="text" name="discount">
                                </div>
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                        Total Amount
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-city" type="number" name="total_amount">
                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                                        Advance Payment
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-zip" type="text" name="advance_payment">
                                </div>
                            </div>
                            <div class="border-t mt-6 pt-3">
                                <button type="submit"
                                        class="rounded text-gray-100 px-3 py-1 float-right bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
