@extends('layouts.app')

@section('content')

    {{-- Adding pagination component PaginationCounter.php, pagination-counter.blade.php  --}}
    <x-pagination-counter :paginator="$menus"/>

    <div class="d-flex justify-content-between mb-3">
        <div>
            <x-menu-links :menus="$menus" :position="1"/>
        </div>
        <div>
            <x-menu-links :menus="$menus" :position="2"/>
        </div>
        <div>
            <x-menu-links :menus="$menus" :position="3"/>
        </div>
        <div>
            <x-menu-links :menus="$menus" :position="4"/>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->name }}</td>
                        <td>
                            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-white bg-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-pagination-info-and-previous-next :paginator="$menus"/>
@endsection
