@if (count($feed_items))
<div class="card-body">
    <div class="statuses">
        @foreach ($feed_items as $status)
            @include('statuses._status', ['user' => $status->user])
        @endforeach
    </div>
</div>
<!-- Pagination -->
<nav aria-label="pagination example" class="d-flex justify-content-center">
        {{ $feed_items->links('vendor.pagination.default') }}
</nav>
@endif