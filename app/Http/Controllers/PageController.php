<?php
namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers;

class Pagecontroller extends Controllers
{
    public function show(Request $request)
    {
       $txt_name =$request->input('name');
       $txt_hidden =$request->input('hidden');
       $txt_radio =$request->input('radio');
       echo 'ชื่อ : '.$txt_name.'<br>'.'ID : '.$txt_hidden.'<br>'.'เพศ : '.$txt_radio;
    }
}