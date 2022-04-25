@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Existing Customer') }}
                    <a href="{{route('admin.admin.home')}}" class="btn btn-success offset-md-8">Dashboard</a>
                </div>
                @if (session('success'))
                <div class="alert alert-success" role="flash">
                    {{ session('success') }}
                </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.update',$user->id) }}">
                        @method('PUT')
                        @csrf

                        <div class="row mb-3">
                            <label for="username" class="col-md-2 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-4">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name ?? ''}}">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{$user->email ?? ''}}" readonly>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="is_admin" class="col-md-2 col-form-label text-md-end">{{ __('IsAdmin') }}</label>

                            <div class="col-md-4">
                                <input id="is_admin" type="text" class="form-control @error('is_admin') is-invalid @enderror" name="is_admin" value="{{$user->is_admin ?? 'N/A'}}">

                                @error('is_admin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="email_verified_at" class="col-md-2 col-form-label text-md-end">{{ __('Email_Verified_At') }}</label>

                            <div class="col-md-4">
                                <input id="email_verified_at" type="text" class="form-control @error('email_verified_at') is-invalid @enderror" name="email_verified_at" value="{{$user->email_verified_at ?? 'N/A'}}" readonly>

                                @error('email_verified_at')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="created_at" class="col-md-2 col-form-label text-md-end">{{ __('Created_at') }}</label>

                            <div class="col-md-4">
                                <input id="created_at" type="text" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{$user->created_at ?? 'N/A'}}" readonly>

                                @error('created_at')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="Updated_at" class="col-md-2 col-form-label text-md-end">{{ __('Updated_At') }}</label>

                            <div class="col-md-4">
                                <input id="updated_at" type="text" class="form-control @error('updated_at') is-invalid @enderror" name="updated_at" value="{{$user->updated_at ?? 'N/A'}}" readonly>

                                @error('updated_at')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label for="google_id" class="col-md-2 col-form-label text-md-end">{{ __('Google_id') }}</label>

                            <div class="col-md-4">
                                <input id="google_id" type="text" class="form-control @error('google_id') is-invalid @enderror" name="google_id" value="{{$user->google_id ?? 'N/A'}}" readonly>

                                @error('google_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary  offset-md-8">
                                    {{ __('Update User') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection