<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function allposts(){

        $posts = Post::with('user')->get();

        return view('welcome',compact('posts'));
    }

    public function createpage(){

        return view('create');

    }

    public function createpost(Request $request){

        $validated = $request->validate([
            'title'=> 'required|string|min:10',
            'content'=>'required|string',
            'image_url'=>'required|image|mimes:jpeg,png,jpg',
            
        ]);

        $image_path = $request->file('image_url')->store('images','public');

        $userId = Auth::user()->id;

        Post::create([
            'title'=> $validated['title'],
            'content'=>$validated['content'],
            'image_url'=>$image_path,
            'user_id'=>$userId,
        ]);

            return redirect()->route('all')->with('success','Post added successfully');
    }

    public function singlepost($id){

        $post = Post::with('user')->find($id);

        return view('single',compact('post'));
    }

    public function deletepost(Post $post){

        $post->delete();

        return redirect()->route('all');

    }
}
