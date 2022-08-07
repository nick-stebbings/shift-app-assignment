<div class="flex justify-center mb-4">
    <div class="block max-w-sm text-center bg-white rounded-lg shadow-lg">
    <div class="px-6 py-3 mb-4 border-b border-gray-300">
    </div>
    <div class="p-6">
    <p class="mb-4 text-base text-gray-700">
        <ul>
            <li class="flex justify-between gap-x-4"><span>Date:</span><span>{{$shift -> date}}</span></li>
            <li class="flex justify-between gap-x-4"><span>Starting:</span><span>{{$shift -> starting}}</span></li>
            <li class="flex justify-between gap-x-4"><span>Ending:</span><span>{{$shift -> ending}}</span></li>
            <li class="flex justify-between gap-x-4"><span>Breaks:</span><span>{{$shift -> breaks}}</span></li>
            <li class="flex justify-between gap-x-4"><span>Location:</span><span>{{$shift -> location}}</span></li>
        </ul>
    </p>
    @if(!$isManager)
        @unless($shift -> accepted == '1')
        <form action="/profile" method="get">
            <button type="submit" class=" inline-block px-6 mt-4 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Accept Shift</button>
            @else
            <div class="px-6 py-3 mb-4 text-gray-600 border-t border-gray-300">
                Shift Accepted
            </div>
        </form>    
        @endunless
    @endif
    </div>
</div>
</div>