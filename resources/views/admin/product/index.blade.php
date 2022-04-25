@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product List') }}
                    <a href="{{route('admin.admin.home')}}" class="btn btn-success offset-md-8">Dashboard</a>
                </div>


                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category ID</th>
                                <th scope="col">Sub Category ID</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    {{$product->name ?? 'N/A'}}
                                </td>
                                <td>
                                    {{$product->description ?? 'N/A'}}
                                </td>
                                <td>
                                    {{$product->category_id ?? 'N/A'}}
                                </td>
                                <td>
                                    {{$product->sub_category_id ?? 'N/A'}}
                                </td>

                                <td>
                                    <a href="{{ route('admin.products.edit', $product->id) }}"><button type="button" class="btn btn-primary btn-icon mb-2">
                                            <i class="fa fa-edit"></i></button></a>

                                    <a href="{{ route('admin.products.destroy', $product->id) }}"><button type="button" class="btn btn-warning btn-icon mb-2">
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