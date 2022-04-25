@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="fa fa-dashboard text-primary"></i>{{ __(' Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="flash">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <a href="{{route('user.profile')}}" class="btn btn-light p-3"> <i class="fa fa-user-md"></i> Profile</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection