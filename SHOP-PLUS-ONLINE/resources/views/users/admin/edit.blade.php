@extends('admin')
@section('content')
    <div class="card o-hidden border-0 shadow-lg my-12">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="p-5">
                        <form class="user" method="post" action="{{route('user.edit',$user->id)}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" value="{{$user->name}}" name="name" class="form-control form-control-user" id="exampleInputEmail" placeholder="Users">
                            </div><div class="form-group">
                                <input type="text" value="{{$user->email}}" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" value="{{$user->phone}}" name="phone" class="form-control form-control-user" id="exampleInputEmail" placeholder="phone">
                            </div>


                            <button class="btn btn-success btn-user btn-block">
                                Update Users
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

