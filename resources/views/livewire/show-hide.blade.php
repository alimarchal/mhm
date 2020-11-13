<div class="flex-4">
    <form class="w-full max-w-sm" method="get" action="{{url('guest?')}}" style="display: {{$attribute}};">
        <div class="flex items-center border-b border-teal-500 py-2">
            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text"
                   placeholder="Search..." name="search">
            <button type="submit"
                    class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                    type="button">
                Search
            </button>
        </div>
    </form>
    <button class="float-right bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-4 rounded-l mt-2"  wire:click="showHide">
        Show/Hide
    </button>
</div>
