<div class="row mb-3">
    <div class="col-1">
        <h1 class="text-center">{{ $title }}</h1>
    </div>
    <div class="col-2">
    {{--    @can('isAdmin')   --}}
        <a href="{{ $createUrl }}" class="btn btn-primary">Add New</a>
    {{--   @endcan   --}}
    </div>
    <div class="col-6"></div>
    <div class="col-1">
        <a href="{{ route('home') }}" class="btn btn-secondary">Home</a>
    </div>
    <div class="col-1">
        <a href="{{ $allUrl }}" class="btn btn-secondary">All {{ $title }}</a>
    </div>
</div>