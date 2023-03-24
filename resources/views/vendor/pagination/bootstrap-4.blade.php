@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span  style="color: #354c5c;" class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a style="color: #354c5c" class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif



            {{-- Pagination Elements --}}
            {{-- @foreach ($elements as $element) --}}
                {{-- "Three Dots" Separator --}}
                {{-- @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span style="color: #354c5c" class="page-link">{{ $element }}</span></li>
                @endif --}}

                {{-- Array Of Links --}}
                {{-- @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span style="color: #354c5c; background-color: #354c5c; border: none;" class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a style="color: #354c5c" class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach --}}


            {{-- Pagination Elements --}}
@foreach ($elements as $element)
{{-- "Three Dots" Separator --}}
@if (is_string($element))
    <li class="page-item disabled" aria-disabled="true"><span style="color: #354c5c" class="page-link">{{ $element }}</span></li>
@endif

{{-- Array Of Links --}}
@if (is_array($element))
    @php
        $showing = 0;
        $start = max(1, $paginator->currentPage() - 1);
        $end = min($start + 3, count($element));
    @endphp

    @foreach (array_slice($element, $start - 1, $end - $start + 1, true) as $page => $url)
        @if ($page == $paginator->currentPage())
            <li class="page-item active" aria-current="page"><span style="color: #fefefe; background-color: #354c5c; border: none;" class="page-link">{{ $page }}</span></li>
        @else
            <li class="page-item"><a style="color: #354c5c" class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif

        @php
            $showing++;
            if ($showing >= 4) break;
        @endphp
    @endforeach
@endif
@endforeach




            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a style="color: #354c5c" class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span style="color: #354c5c" class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
