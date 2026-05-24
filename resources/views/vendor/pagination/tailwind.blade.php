@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center mt-10 justify-center">
        <div class="flex items-center gap-4">
            <span class="relative z-0 inline-flex shadow-sm rounded-md gap-1">
                {{-- دکمه قبلی --}}
                @if ($paginator->onFirstPage())
                    <span class="flex justify-center items-center w-9 h-10 text-sm font-medium text-gray-500 bg-gray-800 border border-gray-700 cursor-default rounded-md">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                @else
                    <button wire:click="previousPage('page')" class="flex justify-center items-center w-9 h-10 text-sm font-medium text-gray-300 bg-gray-800 border border-gray-700 rounded-md hover:bg-gray-700 focus:outline-none transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                @endif

                {{-- شماره صفحات --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span class="flex justify-center items-center w-9 h-10 text-sm font-medium text-gray-500 bg-gray-800 border border-gray-700 cursor-default rounded-md">{{ $element }}</span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span class="flex justify-center items-center w-9 h-10 text-sm font-medium text-white bg-blue-600 border border-blue-600 cursor-default rounded-md">{{ $page }}</span>
                            @else
                                <button wire:click="gotoPage({{ $page }})" class="flex justify-center items-center w-9 h-10 text-sm font-medium text-gray-300 bg-gray-800 border border-gray-700 rounded-md hover:bg-gray-700 focus:outline-none transition">{{ $page }}</button>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- دکمه بعدی --}}
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage('page')" class="flex justify-center items-center w-9 h-10 text-sm font-medium text-gray-300 bg-gray-800 border border-gray-700 rounded-md hover:bg-gray-700 focus:outline-none transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                @else
                    <span class="flex justify-center items-center w-9 h-10 text-sm font-medium text-gray-500 bg-gray-800 border border-gray-700 cursor-default rounded-md">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                @endif
            </span>
        </div>
    </nav>
@endif