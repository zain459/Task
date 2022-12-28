<?php

namespace App\Http\Controllers;

use App\Models\lists;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    public function index(){

        $lists=lists::paginate(4);


        return view('home',['lists'=>$lists]);
    
    }

    

    function createList(Request $request){
        //  dd($request->all());

        $request->validate([
            'title'=>'required',
            'url'=>'required|unique:lists,url',
            'description'=> 'required',
            
        ]);


        $lists = new lists;
        $lists->title = $request->title;
        $lists->url = $request->url;
        $lists->description = $request->description;
        $lists->save();

        return redirect(route('home'));


    }

    function editList($id){

        $lists=lists::find($id);
        return view('list.edit_list',['lists'=>$lists]);
    }

    function updateList(Request $request, $id){

        $lists=lists::find($id);
        $lists->title = $request->title;
        $lists->url = $request->url;
        $lists->description = $request->description;
        $lists->save();

        return redirect(route('home'));

    }

    function deleteList($id){
        $lists= lists::find($id);
        $lists->delete();
 
        return redirect(route('home'));
     }
}
