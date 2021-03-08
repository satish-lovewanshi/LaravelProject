<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\post;
use File;


class PostController extends Controller
{
    //
    function showeditor(Request $req){
        $data['posts']=new post();
        if($req->post_id){
            $id=$req->post_id;
            $data['posts']=post::where('id',$id)->first();//return first machted row
        }
        return view('admin.post.addpost',$data);
    }
    // store post data in database or update if edited
    function post_store(Request $req){
        $id="";
        if($req->post_id){
            $id=$req->post_id;
        }
        $validator=Validator::make($req->all(),[
            'title'=>'required',
            'section_title'=>'required',
        ]);
        if($validator->fails()){
            $success=0;
            return back()->withErrors($validator)->withInput();
        }else{
            $filename="";
            if($req->image){
                $filename=$this->fileUpload($req,'image','');
                // $filename=$req->file('image')->getClientOriginalName();
                // $req->file('image')->storeAs('public/postimage',$filename); //store image in storage/app/public/banner_image
            }else{
                if($req->old_image){
                    $filename=$req->old_image;
                }
            }
            $data=array(
                        'page_title'=>$req->page_title,
                        'section_title'=>$req->section_title,
                        'title'=>$req->title,
                        'description'=>$req->description,
                        'image'=>$filename,
            );
            // $post=post::create($data);    this line is used for only create new post 
            // below line is create and update togather
            $post=post::updateOrCreate(['id'=>$id],$data);
            if($post){
                if($id){
                    return redirect()->route('showpost')->with(['message'=>'post is successfully updated']);
                }else{
                    return redirect()->route('showpost')->with(['message'=>'post successfully inserted']);
                }
            }
            else{
                return back()->with(['message'=>'Something Wrong']);
            }
        }
    }
    // post edit
    function showpost(){
        $data['posts']=post::paginate(20);
        return view('admin.post.showpost',$data);
    }
    // Delete post 
    function delete_post(Request $req){
        $id=$req->post_id;
        $img=post::find($id)['image'];
        if(File::exists(public_path('uploads/'.$img))){ //folder se image ko delete kiya
            File::delete(public_path('uploads/'.$img));
        }
        $data=post::find($id);
        $data->delete();
        return back()->with(['message'=>"post successfully deleted."]);
    }
}
