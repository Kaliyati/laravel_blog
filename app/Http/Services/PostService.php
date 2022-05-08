<?php

namespace App\Http\Services;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;


class PostService {

    public function __construct() {

    }

    public function store(array $data): Post {

        $post = new Post();
        $post->fill($data);
        $post->user_id = Auth::user()->id;
        $post->save();

        return $post;
    }

    public function update(Request $request): Collection {
        $id = request('id');
        $post = Post::find($id);
        $post->title=request("title");
        $post->content=request("content");

        if($post->update()){
            return Post::all();            
        }
        return null;
    }

    public function delete(Request $request): Collection {
        $id = request('id');
        $post = Post::find($id);
        if($post->delete()){
            return Post::all();            
        }
        return null;

    }

}