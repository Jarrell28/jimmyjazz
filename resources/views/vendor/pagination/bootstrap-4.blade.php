@if ($paginator->hasPages())
    <ul class="pagination d-inline-flex">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="">< Prev</span></li>
        @else
            <li class="page-item"><a class="" style="color:gray; text-decoration: none;" href="{{ $paginator->previousPageUrl() }}" rel="prev">< Prev</a></li>
        @endif

        {{-- Pagination Elements --}}
        {{--@foreach ($elements as $element)--}}
            {{-- "Three Dots" Separator --}}
            {{--@if (is_string($element))--}}
                {{--<li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>--}}
            {{--@endif--}}

            {{-- Array Of Links --}}
            {{--@if (is_array($element))--}}
                {{--@foreach ($element as $page => $url)--}}
                    {{--@if ($page == $paginator->currentPage())--}}
                        {{--<li class="page-item active"><span class="page-link">{{ $page }}</span></li>--}}
                    {{--@else--}}
                        {{--<li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
            {{--@endif--}}
        {{--@endforeach--}}

        <div class=" ml-1 mt-auto mb-auto mr-1" style="color:black
">Page {{$paginator->currentPage()}} Of {{$paginator->lastPage()}}</div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="" style="color:gray; text-decoration: none;" href="{{ $paginator->nextPageUrl() }}" rel="next">Next ></a></li>
        @else
            <li class="page-item disabled"><span class="">Next ></span></li>
        @endif
    </ul>
@endif
