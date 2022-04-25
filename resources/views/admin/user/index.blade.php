@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customer List') }}
                    <a href="{{route('admin.admin.home')}}" class="btn btn-success offset-md-8">Dashboard</a>
                </div>


                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Email Verified At</th>
                                <th scope="col">Google ID</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    {{$user->name ?? 'N/A'}}
                                </td>
                                <td>
                                    {{$user->email ?? 'N/A'}}
                                </td>
                                <td>
                                    {{$user->email_verified_at ?? 'N/A'}}
                                </td>
                                <td>
                                    {{$user->google_id ?? 'N/A'}}
                                </td>

                                <td>
                                    <a href="{{ route('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-primary btn-icon mb-2">
                                            <i class="fa fa-edit"></i></button></a>

                                    <a href="{{ route('admin.users.destroy', $user->id) }}"><button type="button" class="btn btn-warning btn-icon mb-2">
                                            <i class="fa fa-trash-o"></i></button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection