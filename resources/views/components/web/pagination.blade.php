@if ($paginator->hasPages())
    <nav>
        <style>
            .page-item .ling {
                font-weight: bold;
            }

            .page-link {
                color: #D8E28C;
            }

            .page-link:hover {
                color: #000000;
            }

            .active>.page-link,
            .page-link.active {
                background-color: #D8E28C !important;
                border-color: #D8E28C !important;
                color: #ffff;
            }
        </style>
        <ul class="pagination">

            {{-- Link to First Page --}}
            <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link ling text-black fw-bold" href="{{ $paginator->url(1) }}" rel="first">&laquo;</a>
            </li>

            {{-- Previous Link --}}
            <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link ling fw-bold text-black"
                    href="{{ $paginator->onFirstPage() ? '#' : $paginator->previousPageUrl() }}"
                    rel="prev">&lsaquo;</a>
            </li>

            @php
                $current = $paginator->currentPage();
                $last = $paginator->lastPage();
                $window = 4;
                $start = max($current - 1, 1);
                $end = min($start + $window - 1, $last);
                $start = max($end - $window + 1, 1);
            @endphp

            {{-- Display the pagination window --}}
            @for ($i = $start; $i <= $end; $i++)
                <li class="page-item {{ $i == $current ? 'active' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            {{-- Next Link --}}
            <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link ling fw-bold text-black"
                    href="{{ $paginator->hasMorePages() ? $paginator->nextPageUrl() : '#' }}"
                    rel="next">&rsaquo;</a>
            </li>

            {{-- Link to Last Page --}}
            <li class="page-item {{ $current == $last ? 'disabled' : '' }}">
                <a class="page-link ling text-black fw-bold" href="{{ $paginator->url($last) }}"
                    rel="last">&raquo;</a>
            </li>

        </ul>
    </nav>
@endif
