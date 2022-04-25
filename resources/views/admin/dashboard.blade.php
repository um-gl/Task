@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header text-primary"><i class="fa fa-dashboard"></i>{{ __(' Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="flash">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="card col-3 m-2">
                                <div class="card-header"><i class="fa fa-users "></i> Customer</div>
                                <div class="card-body">
                                    <a href="{{route('admin.users.create')}}" class="btn btn-secondary m-2"><i class="fa fa-user-plus"></i> Add customer</a>
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-dark m-2"><i class="fa fa-list"></i> Customer List</a>
                                </div>
                            </div>
                            <div class="card col-3 m-2">
                                <div class="card-header"><i class="fa fa-cubes "></i> Product</div>
                                <div class="card-body">
                                    <a href="{{route('admin.products.create')}}" class="btn btn-secondary m-2"><i class="fa fa-plus"></i> Add product</a>
                                    <a href="{{ route('admin.products.index') }}" class="btn btn-dark m-2"><i class="fa fa-list"></i> Product List</a>
                                </div>
                            </div>
                            <div class="card col-3 m-2">
                                <div class="card-header"><i class="fa fa-cubes "></i> Categories</div>
                                <div class="card-body">
                                    <a href="{{route('admin.categories.create')}}" class="btn btn-secondary m-2"><i class="fa fa-plus"></i> Add Category</a>
                                    <a href="{{ route('admin.categories.index') }}" class="btn btn-dark m-2"><i class="fa fa-list"></i> Categories List</a>
                                </div>
                            </div>
                            <div class="card col-3 m-2">
                                <div class="card-header"><i class="fa fa-link "></i> Other Links</div>
                                <div class="card-body">
                                    <a href="/telescope" class="btn btn-secondry">Telescope</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection