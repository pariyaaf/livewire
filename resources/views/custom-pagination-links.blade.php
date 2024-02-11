<style>
    .pagination-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .pagination-item {
        margin-right: 10px;
    }

    .pagination-button {
        padding: 8px 12px;
        background-color: #3490dc;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .pagination-disabled {
        color: #ccc;
    }
</style>

<div class="pagination-container">
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation">
            <span class="pagination-item">
                @if ($paginator->onFirstPage())
                    <span class="pagination-disabled">Previous</span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" class="pagination-button" rel="prev">Previous</button>
                @endif
            </span>

            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <span class="pagination-item">
                            @if ($page == $paginator->currentPage())
                                <span class="pagination-button pagination-current">{{ $page }}</span>
                            @else
                                <button wire:click="gotoPage({{ $page }})" class="pagination-button">{{ $page }}</button>
                            @endif
                        </span>
                    @endforeach
                @endif
            @endforeach

            <span class="pagination-item">
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" class="pagination-button" rel="next">Next</button>
                @else
                    <span class="pagination-disabled">Next</span>
                @endif
            </span>
        </nav>
    @endif
</div>
