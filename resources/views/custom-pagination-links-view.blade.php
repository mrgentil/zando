@if ($paginator->hasPages())
    <div class="pagination" role="pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="prev disabled"><a href="javascript:void(0)" title=""><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></span>
        @else
            <span class="prev"><a href="javascript:void(0)" wire:click="previousPage" title=""><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></span>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="page disabled d-none d-md-block" aria-disabled="true"><a href="javascript:void(0)">{{ $element }}</a></span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="page current d-none d-md-block" aria-current="page">{{ $page }}</span>
                    @else
                        <span class="page  d-none d-md-block"><a href="javascript:void(0)" wire:click="gotoPage({{ $page }})">{{ $page }}</a></span>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <span class="next"><a href="javascript:void(0)" wire:click="nextPage"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></span>
        @else
            <span class="next disabled"><a href="javascript:void(0)"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></span>
        @endif
    </div>
@endif
