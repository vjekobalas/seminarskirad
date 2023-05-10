@extends('layouts.app')

@section('content')

{{-- Adding pagination component PaginationCounter.php, pagination-counter.blade.php  --}}
<x-pagination-counter :paginator="$roles"/> 

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->slug }}</td>
                        <td>
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="d-inline-block">
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
<x-pagination-info-and-previous-next :paginator="$roles"/>
@endsection

