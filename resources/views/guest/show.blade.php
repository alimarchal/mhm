<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoice') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-4 md:gap-6">

                <div class="mt-5 md:mt-0 md:col-span-4">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            @if (!is_null($guest->check_out_date))
                                <p class="text-4xl text-center font-extrabold">Invoice </p>
                                <p class="text-2xl text-center font-extrabold">{{ config('app.name', 'Laravel') }}</p>
                                <table class="table-auto mt-12 m-auto">
                                    <thead class="text-left">
                                    <tr>
                                        <th class="border px-4 py-2">Customer Name</th>
                                        <th class="border px-4 py-2">{{$guest->guest_name}}</th>
                                    </tr>
                                    <tr>
                                        <th class="border px-4 py-2">CNIC</th>
                                        <th class="border px-4 py-2">{{$guest->cnic}}</th>
                                    </tr>
                                    <tr>
                                        <th class="border px-4 py-2">Contact</th>
                                        <th class="border px-4 py-2">{{$guest->contact}}</th>
                                    </tr>
                                    <tr>
                                        <th class="border px-4 py-2">Check In Date</th>
                                        <th class="border px-4 py-2">{{$guest->check_in_date}}</th>
                                    </tr>
                                    <tr>
                                        <th class="border px-4 py-2">Check Out Date</th>
                                        <th class="border px-4 py-2">{{$guest->check_out_date}}</th>
                                    </tr>

                                    <tr>
                                        <th class="border px-4 py-2">Discount</th>
                                        <th class="border px-4 py-2">{{$guest->discount . ($guest->discount_type=="Percentage"?'%':'') }}</th>
                                    </tr>

                                    <tr>
                                        <th class="border px-4 py-2">Advance Payment</th>
                                        <th class="border px-4 py-2">{{number_format($guest->advance_payment,2)}}</th>
                                    </tr>


                                    <tr>
                                        <th class="border px-4 py-2">Total Amount</th>
                                        <th class="border px-4 py-2">{{number_format($guest->total_amount,2)}}</th>
                                    </tr>

                                    <tr>
                                        <th class="border px-4 py-2">Total Payable</th>
                                        <th class="border px-4 py-2">{{number_format($guest->total_payable,2)}}</th>
                                    </tr>



                                    </thead>
                                </table>
                                <script type="text/javascript">
                                    <!--
                                    window.print();
                                    //-->
                                </script>
                            @else
                                Please update invoice checkout date...
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
