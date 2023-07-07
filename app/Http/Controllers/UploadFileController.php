<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadFileController extends Controller {
   public function index() {
      return view('uploadfile');
   }
   public function showUploadFile(Request $request) {
      $file = $request->file('image');
    //   dd($file);
      //Display File Name
    //   echo 'File Name: '.$file->getClientOriginalName();
    //   echo '<br>';
   
    //   //Display File Extension
    //   echo 'File Extension: '.$file->getClientOriginalExtension();
    //   echo '<br>';
   
    //   //Display File Real Path
    //   echo 'File Real Path: '.$file->getRealPath();
    //   echo '<br>';
   
    //   //Display File Size
    //   echo 'File Size: '.$file->getSize();
    //   echo '<br>';
   
    //   //Display File Mime Type
    //   echo 'File Mime Type: '.$file->getMimeType();
   
    //   //Move Uploaded File
    //   $destinationPath = 'uploads';
    //   $file->move($destinationPath,$file->getClientOriginalName());

    
    
    
    $file = $request->file('image');

    // Retrieve the file details
    $fileName = $file->getClientOriginalName();
    $fileExtension = $file->getClientOriginalExtension();
    $fileSize = $file->getSize();

    // Move Uploaded File
    $destinationPath = 'uploads';
    $file->move($destinationPath, $fileName);

      return view('test2', [
        'fileName' => $fileName,
        'fileExtension' => $fileExtension,
        'fileSize' => $fileSize,
        'filePath' => $destinationPath . '/' . $fileName,
     ]);
   }
}