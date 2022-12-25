<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picture;

class PictureController extends Controller
{
    public function showcase(Request $request)
    {
        sleep(0);
        $word=$request->message;
        $posts=Picture::where('description',$word)->get();     
        if($posts)
        {
            $post=$posts[0];  return view("Showpost", compact("post","word"));
        }
        else 
        return "Uzur mening bazam bu frazani qayta ishlash uchun yetarli emas";
        //return $post;
    }
}
