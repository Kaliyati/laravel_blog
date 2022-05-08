@extends('layouts.app')
@section('content')
<section class="container">
  <div class="row">
  <div class="col-md-10">
    <h5>Posts</h5>
  </div>
  <div class="col-md-2 mb-3">
    <a href="/add"><button class="btn btn-primary">Add New</button></a>
  </div>
  </div>
</section>
<div class="container">
    <div class="row">
  <div class="col-md-12">
        @foreach($posts as $item)
        <div class="card mb-3">
        <div class="card-body">
        <div class="row mb-3">
          <div class="col-md-1">
            <img src="img/placeholder.jpg" class="rounded" height="50" alt="user"> 
          </div>
          <div class="col-md-11">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text">{{$item->content}}.</p>
                <div class="text-right">
                <a href="/view/{{$item->id}}"><button class="btn btn-sm btn-success mb-3"><i class="fa fas-view"></i>View</button></a>
              <a href="/edit/{{$item->id}}"><button class="btn btn-sm btn-primary mb-3"><i class="fa fas-edit"></i>Edit</button></a>
              <a href="/delete/{{$item->id}}"><button class="btn btn-sm btn-danger mb-3"><i class="fa fa-trash"></i>Delete</button></a>
            </div>
              </div>
            </div>
           
        </div>
</div>
        @endforeach
       
    </div>
</div>

</section>

@endSection