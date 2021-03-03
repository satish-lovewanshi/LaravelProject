<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function fileUpload($req,$image_key,$upload_path=''){
        $fileName='';
        if($upload_path==""){
            $upload_path=public_path('/uploads');//path empty rhega to default path lega uploads forlder ka 
        }
        if($req->hasFile($image_key)){
            $rand=rand(10,100);
            $image=$req->file($image_key);
            $fileName=$name=date('dmY').time().$rand.'.'.$image->getClientOriginalExtension();
            $image->move($upload_path,$fileName);
        }
        else{
            dd($req->file($image_key));
        }
        return $fileName;
    }
}
