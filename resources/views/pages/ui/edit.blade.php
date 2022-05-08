@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
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
<form action="/update" method="POST">
    @csrf
    <div class="container">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Title">
                <input type="hidden" name="id" value="{{$post->id}}" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                <textarea class="form-control" style="height:150px" value="{{$post->content}}" name="content" placeholder="Content">{{$post->content}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
@endSection