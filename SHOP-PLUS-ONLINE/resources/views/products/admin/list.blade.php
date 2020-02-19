@extends('admin')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Product</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Content</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>
                                <img src="{{asset('storage/images/'.$product->image)}}" width="150">
                            </td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->content}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('product.edit', $product->id)}}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{route('product.delete', $product->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
