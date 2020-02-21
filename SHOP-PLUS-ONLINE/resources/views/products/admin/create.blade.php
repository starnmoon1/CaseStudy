@extends('admin')
@section('content')
    @can('crud-user')
    <div class="card o-hidden border-0 shadow-lg my-12">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="p-5">
                        <form class="user" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name='product_name' class="form-control form-control-user" id="exampleInputEmail" placeholder="Name Product">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                </div>
                                <select name="product_category" class="custom-select" id="inputGroupSelect01">
                                    @foreach($categories as $catgory)
                                        <option value="{{$catgory->id}}">{{$catgory->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input name="product_description" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description Product">
                            </div>

                            <div class="form-group">
                                <textarea name="product_content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <input name="product_image" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <div class="form-group">
                                <input name="product_price" type="number" class="form-control form-control-user" id="exampleInputEmail" placeholder="Price Product">
                            </div>

                            <button  class="btn btn-success btn-user btn-block">
                                Create Product
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
