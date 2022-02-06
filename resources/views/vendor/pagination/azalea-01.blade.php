@if ($paginator->hasPages())
    <div class="blog-pagination">
        <ul class="justify-content-center">
            
            @if ($paginator->onFirstPage())
                <li class=" disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a href="#">&lsaquo;</a>
                </li>
            @else
                <li class="">
                    <a class="" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif          
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true">{{ $element }}</li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><a hreft="#">{{ $page }}</a></li>
                        @else
                            <li class=""><a class="" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

          
            @if ($paginator->hasMorePages())
                <li class="">
                    <a class="" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a href="#">&rsaquo;</a>
                </li>
            @endif
        </ul>
</div>
@endif
