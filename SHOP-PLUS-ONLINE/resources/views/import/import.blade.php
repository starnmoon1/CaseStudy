@extends('admin')
@section('content')
    <style>
        input.form-control {
            padding-top: 3px;
        }
    </style>
    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                Import Export Excel to database Example - Shop-Plus+
            </div>
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import Data</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
