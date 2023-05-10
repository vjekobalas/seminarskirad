@extends('layouts.app')

@section('content')
<p><span class="text-blue-500">This is a test.</span></p>

<div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">Home</h2>
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ route('users.index') }}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            User functions
                        </button>
                    </a>
                    <x-secondary-button :href="route('users.index')">User functions</x-secondary-button>
                    <x-secondary-button :href="route('roles.index')">Role functions</x-secondary-button>
                    <x-secondary-button :href="route('categories.index')">Category functions</x-secondary-button>
                    <x-secondary-button :href="route('menus.index')">Menu functions</x-secondary-button>
                    <x-secondary-button :href="route('pages.index')">Page functions</x-secondary-button>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-secondary-button type="submit">Logout</x-secondary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection