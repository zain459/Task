<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\customers;

class PostController extends Controller
{
    //
    public function index(){

        $post=post::paginate(4);
        $customers=customers::all();





        return view('Post.posts', [ 'customers' => $customers,'post' =>$post]);
    
    }

    function createPost(Request $request){
        //  dd($request->all());
          
        $request->validate([
            // 'customer_id'=>'',
            'title'=>'required',
            'discription' => 'required',
            
        ]);
          
        $post = new post;
        $post->customer_id = $request->customer_id;
        $post->title = $request->title;
        $post->discription = $request->discription;
        $post->save();

        return redirect(route('posts'));


    }
    function editPost($id){

        $post=post::find($id);
        $customers=customers::all();
        return view('Post.edit_posts',['customers' => $customers,'post'=>$post]);
    }

    function updatePost(Request $request, $id){

        $post=post::find($id);
        $post->customer_id = $request->customer_id;
        $post->title = $request->title;
        $post->discription = $request->discription;
        $post->save();

        return redirect(route('posts'));

    }

    function deletePost($id){
        $post= post::find($id);
        $post->delete();
 
        return redirect(route('posts'));
     }

   

}
