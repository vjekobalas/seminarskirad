<div class="pagination-info-and-previous-next">
    <div class="d-flex justify-content-between align-items-center">
        <div class="pagination-info">
            Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} entries
        </div>
        <div class="pagination-previous-next">
            @if ($paginator->previousPageUrl())
                <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-primary btn-sm mr-2">&laquo; Previous</a>
            @endif
            @if ($paginator->nextPageUrl())
                <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-primary btn-sm">Next &raquo;</a>
            @endif
        </div>
    </div>
    <div class="pagination-page">
        {{ $paginator->onEachSide(1)->links() }}
    </div>
</div>
