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
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Category">
                            </div>

                            <a href="login.html" class="btn btn-success btn-user btn-block">
                                Create Category
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
