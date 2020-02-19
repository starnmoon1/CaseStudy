@extends('admin')
@section('content')
    <div class="card o-hidden border-0 shadow-lg my-12">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="p-5">
                        <form class="user">

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Name Product">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description Product">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control form-control-user" id="exampleInputEmail" placeholder="Price Product">
                            </div>

                            <a href="login.html" class="btn btn-success btn-user btn-block">
                                Create Product
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
