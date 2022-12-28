<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;

class CustomerController extends Controller
{
    //
    public function index(){

        $customers=customers::paginate(4);


        return view('Customer.customer',['customers'=>$customers]);
    
    }

    function createCustomer(Request $request){
        //  dd($request->all());
          
        $request->validate([
            'name'=>'required',
            'address'=>'required|unique:lists,url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
          
        $customers = new customers;
        $customers->name = $request->name;
        $customers->address = $request->address;
        $imageName = time().'.'.$request->image->extension(); 
        // $customers-> $request->image->storeAs('images', $imageName);
        $customers->image = $request->image->storeAs('images',$imageName);
        $customers->save();

        return redirect(route('customer'));


    }

    function editCustomer($id){

        $customers=customers::find($id);
        return view('Customer.edit_customer',['customers'=>$customers]);
    }

    function updateCustomer(Request $request, $id){

        $customers=customers::find($id);
        $customers->name = $request->name;
        $customers->address = $request->address;
        $customers->image = '';
        $customers->save();

        return redirect(route('customer'));

    }

    function deleteCustomer($id){
        $customers= customers::find($id);
        $customers->delete();
 
        return redirect(route('customer'));
     }
}
