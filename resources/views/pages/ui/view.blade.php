@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card mb-3">
        <div class="card-body">
        <div class="row mb-3">
          <div class="col-md-1">
            <img src="img/placeholder.jpg" class="rounded" height="50" alt="user"> 
          </div>
          <div class="col-md-11">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}.</p>
                <div class="text-right">
              <a href="/edit/{{$post->id}}"><button class="btn btn-sm btn-primary mb-3"><i class="fa fas-edit"></i>Edit</button></a>
              <a href="/delete/{{$post->id}}"><button class="btn btn-sm btn-danger mb-3"><i class="fa fa-trash"></i>Delete</button></a>
            </div>
              </div>
            </div>
           
        </div>
</div>

        </div>
   </div>
</div>

@endSection