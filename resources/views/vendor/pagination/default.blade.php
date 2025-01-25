@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="btn bg-gray-300 text-gray-600 cursor-not-allowed px-4 py-2">Previous</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn bg-green-500 text-white px-4 py-2">Previous</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="btn bg-gray-300 text-gray-600 cursor-not-allowed px-4 py-2">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="btn bg-green-500 text-white px-4 py-2">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}"
                            class="btn bg-gray-200 text-gray-800 px-4 py-2 hover:bg-green-200">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn bg-green-500 text-white px-4 py-2">Next</a>
        @else
            <span class="btn bg-gray-300 text-gray-600 cursor-not-allowed px-4 py-2">Next</span>
        @endif
    </nav>
@endif
