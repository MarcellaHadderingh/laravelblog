@extends('layouts.app')


@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <img src="/uploads/avatar/{{$user -> avatar }}" style="width: 150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <form enctype="multipart/form-data" action="/profile" method="POST">
            <label>Update Profile Image</label>
            <br>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
         </div>
    </div>
</div>

<div class="container" style="margin-top:50px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light">
                    <div class="card-header"><h5>Profile</h5></div>
                    <div class="card-body">
                            {{$user->name}}
                            <br>
                            {{$user->email}}
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="container" style="margin-top:50px;" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light">
                <div class="card-header"><h5>Profile edit</h5></div>
                <div class="card-body">
                    <form method="POST" action="/user/{{$user->id}}">
                        @csrf
                        @method('PATCH')
                    <input type="text" name="name" value="{{$user->name}}">
                    <input type="mail" name="mail" value="{{$user->email}}">
                    <input type="submit" value="save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top:50px;" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light">
                    <div class="card-header"><h5>Add Blog</h5></div>
                    <div class="card-body">
                            <form method="POST" action="/post">
                                @csrf
                                @method('POST')
                            <h4>Blog Title:</h4>
                        <input type="text" name="title" style="width:500px;">
                        
                        <h4 style="margin-top:10px;">Blog text:</h4>
                        <textarea name="text" id="area" cols="60" rows="15"></textarea>
                        <br>
                        <input type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:50px;" >
            <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card bg-light">
                            <div class="card-header"><h5>Edit Blog</h5></div>
                            <div class="card-body">

                                    <input type="text" name="title" style="width:500px;">

                                    <textarea name="text" id="area" cols="60" rows="15"></textarea>

                                    <input type="submit" value="update">


 
@endsection
