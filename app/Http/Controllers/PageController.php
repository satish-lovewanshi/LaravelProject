<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\page;
use File;

class PageController extends Controller
{
    //
    function AddPage(Request $req){
        $page=DB::table("pages")->where('page_title','Home')->get();
        $numrow=count($page);
      
        return view('admin.home.addpage',['data'=>$page,'total_row'=>$numrow]);

    }
    // CompanyEditor 
    function CompanyEditor(Request $req){
        $page=DB::table("pages")->where('page_title','Company')->get();
        $numrow=count($page);
    //     if($numrow){
    //         return view('admin.company.company',['data'=>$page]);
    //     }
    //     else
    //     {
    //         $page=new page();
    //         return view('admin.company.company',['data'=>$page]);
    //     }
        return view('admin.company.company',['data'=>$page,'total_row'=>$numrow]);
    }
    // Services function
    function ServicesEditor(Request $req){
        $page=DB::table('pages')->where('page_title','Services')->get();
        $numrow=count($page);
        return view('admin.services.services',['data'=>$page,'total_row'=>$numrow]);
    }
    // store data in database for all pages page of our website
    function CreatePage(Request $req){
        // $img=page::where('data',$req->old_image)->get();
        // $img=page::find('data',$req->old_image)->get();
        $img=$req->old_image;
        if(File::exists(public_path('uploads/'.$img))){ //folder se image ko delete kiya
            File::delete(public_path('uploads/'.$img));
        }
        $PageValues['title']=$req->title;
        $DataValues=array();

        if($req->txt_name){
            $field=$req->txt_name;
            if($field){
                for($j=0;$j<count($field);$j++){
                    $text=$field[$j];
                    $tx=$req->$text; //jo title value ham enter karenge waha tx variable me a jayegi
                    $field_name=page::where(['section_title'=>$text,
                                            'page_title'=>$PageValues['title']])->get();//existing value get ki gai
                    
                    if(count($field_name)>0){
                        $DataValues[$text]=$tx;//section title phle se hai to is datavalue me a jayenge 
                    }else{
                        $NewValues[$text]=$tx;//yadi nhi hai to new array ban jayega 
                    }

                }
            }
        }
        if($req->image){
            $field=$req->image;
            if($field){
                for($i=0;$i<count($field);$i++){
                    $image_name=$field[$i];
                    if($req->$image_name){
                        $filename=$this->fileUpload($req,$image_name,'');//'' image path diya 
                        // $filename=$req->file('banner_image')->getClientOriginalName();
                        // $req->file('banner_image')->storeAs('public/bannerimage',$filename); //store image in storage/app/public/banner_image
                        $field_name=page::where(['section_title'=>$image_name,
                                                'page_title'=>$PageValues['title']])->get();
                    if(count($field_name)>0){
                        $DataValues[$image_name]=$filename;
                    }else{
                        $NewValues[$image_name]=$filename;
                    }
                    }
                }
            }
        }
        if(!empty($DataValues)){
            foreach($DataValues as $key=>$value){
                $where=array('section_title'=>$key,
                            'page_title'=>$PageValues['title']);
                $result=page::where($where)->update(array('data'=>$value));//title hai to use update kiya 
                if($result){
                    $success=1;
                }
            }
        }
        // jab new title insert ki jati ho!!
        if(!empty($NewValues)){
            foreach ($NewValues as $key => $value) {
                $data=array(
                    'page_title'=>$PageValues['title'],
                    'section_title'=>$key,
                    'data'=>$NewValues[$key]
                );
                $result=page::create($data);//new title ko creat kiya or save kiya
            }
        }
        // if($PageValues['title']=='home'){
        //     return redirect('AddHomePage');
        // }
        // else{
        //     return redirect('Company-page');
        // }
        return back();
    }
    
}
