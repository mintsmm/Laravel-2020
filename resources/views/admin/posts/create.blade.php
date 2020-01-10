@extends('layouts.admin')

@section('content')
    <form action="">
        <div class="card mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="float-left mb-0">Create Post</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="" class="btn btn-laravel float-right">Create</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Body</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
            </div>
        </div>
    </form>

@endsection
