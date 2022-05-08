@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>Add New Post</h2>
            </div>
        </div>
        <div class="col-lg-6">
        <div class="pull-right">
                <a class="btn btn-primary" href="/posts"> Back</a>
            </div>
</div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/store" method="POST">
    @csrf
    <div class="container">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                <textarea class="form-control" style="height:150px" name="content" placeholder="Content"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@endSection