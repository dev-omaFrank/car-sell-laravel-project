<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class imageUploadController extends Controller
{
   public function imageUpload(Request $request){
    $request->validate([
        'carImage'=> 'required|image|mimes:jpg,jpeg,png,gif|max:5242880'
    ]);

    $uploadPath = public_path('uploads');
    if (!file_exists($uploadPath)) {
        mkdir($uploadPath, 0755, true);
    }

    if($request->file('carImage')){
        $imageName = time() . '.' . $request->carImage->extension();
        $request->carImage->move($uploadPath, $imageName);
        return $imageName; 
    }

    return false;
   }
}
