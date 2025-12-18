@if ($paginator->hasPages())
<nav class="flex justify-center mt-8">
    <ul class="inline-flex items-center gap-2">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <li class="px-3 py-2 text-gray-400 bg-gray-200 rounded flex items-center">
                <span class="mr-1">&larr;</span> Prev
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}"
                   class="px-3 py-2 bg-blue-500 text-white rounded flex items-center hover:bg-blue-600 transition">
                   <span class="mr-1">&larr;</span> Prev
                </a>
            </li>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="px-3 py-2 text-gray-400">{{ $element }}</li>
            @endif

            {{-- Array of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="px-3 py-2 bg-blue-700 text-white rounded font-semibold">
                            {{ $page }}
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}"
                               class="px-3 py-2 bg-gray-200 rounded hover:bg-gray-300 transition">
                               {{ $page }}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}"
                   class="px-3 py-2 bg-blue-500 text-white rounded flex items-center hover:bg-blue-600 transition">
                   Next <span class="ml-1">&rarr;</span>
                </a>
            </li>
        @else
            <li class="px-3 py-2 text-gray-400 bg-gray-200 rounded flex items-center">
                Next <span class="ml-1">&rarr;</span>
            </li>
        @endif

    </ul>
</nav>
@endif
