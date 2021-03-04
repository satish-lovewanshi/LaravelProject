<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\contact;

class ContactController extends Controller
{
    //
    function SaveContact(Request $req){
        $validator=Validator::make($req->all(),[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $con=new contact;
        $con->name=$req->name;
        $con->email=$req->email;
        $con->message=$req->message;
        $con->save();
        
        return back()->with(['message'=>'Your data is submitted.. We contact you as soon as possible !! ']);
        
    }
    function ShowContact(){
        $data['contact']=contact::paginate(5);
        return view('admin.contact.contact',$data);
    }
    function DeleteContact(Request $req){
        $id=$req->id;
        $data=contact::find($id);
        $data->delete();
        return back()->with(['message'=>"one contact is deleted"]);
    }
}
