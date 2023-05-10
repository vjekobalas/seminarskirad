@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Main Function Select Page') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ route('roles.index') }}" class="btn btn-primary btn-lg btn-block">{{ __('Roles') }}</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('users.index') }}" class="btn btn-primary btn-lg btn-block">{{ __('Users') }}</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('categories.index') }}" class="btn btn-primary btn-lg btn-block">{{ __('Categories') }}</a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ route('menus.index') }}" class="btn btn-primary btn-lg btn-block">{{ __('Menus') }}</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('pages.index') }}" class="btn btn-primary btn-lg btn-block">{{ __('Pages') }}</a>
                            </div>
                            <div class="col-md-4">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Logout') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection