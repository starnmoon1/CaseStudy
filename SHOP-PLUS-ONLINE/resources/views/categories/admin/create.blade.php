@extends('admin')
@section('content')
    @can('crud-user')
    <div class="card o-hidden border-0 shadow-lg my-12">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="p-5">
                        <form class="user" method="post" action="{{route('category.store')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="category_name" class="form-control form-control-user" id="exampleInputEmail" placeholder="Category">
                            </div>

                            <button class="btn btn-success btn-user btn-block">
                                Create Category
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
