<?php

namespace App\Http\Controllers;

use App\trendingnews;
use Illuminate\Http\Request;

class trendingnewsController extends Controller
{
    public function trendingnews(){
        return view('admin.trendingnews.trendingnews',[
            'trendingnewss'=>trendingnews::all(),
        ]);
    }
    public function addtrendingnews(Request $request){

        $request->validate([
            'trending_news' => 'required',
        ]);

        $trendingnews = new trendingnews();
        $trendingnews->trending_news = $request->trending_news;
        $trendingnews->publication_status = $request->publication_status;
        $trendingnews->save();
        return back();
    }

//    public function saveimage(Request $request)
//    {
//        $image =$request->file('image');
//        $imagename = rand().$image->getClientOriginalExtension();
//        $director= 'images/trendingnews/';
//        $imgurl= $director.$imagename;
//        $image->move($director,$imagename);
//        return $imgurl;
////        $image = $request->file('image');
////        $imagename =rand() . $image->getClientOriginalExtension();
////       $director = 'images/trendingnews/';
////      $imgurl = $director.$imagename;
////        $imgFile = Image:: make($image->getRealPath());
////        $imgFile->text('© 2017-2021 tutsmake.com - All Rights Reserved', 120, 100, function($font) {
////            $font->size(35);
////            $font->color('#ffffff');
////            $font->align('center');
////            $font->valign('bottom');
////            $font->angle(90);
////        })->save(public_path('images/trendingnews/').'/'.$imagename);
////      return $imgurl;
//    }

    public function publicationtrendingnews($id){
        $product = trendingnews::find($id);
        $product->publication_status= 0;
        $product->save();
        return back();
    }
    public function unpublicationtrendingnews($id){
        $product = trendingnews::find($id);
        $product->publication_status= 1;
        $product->save();
        return back();
    }
    public function edittrendingnews($id){
        $trendingnews = trendingnews::find($id);
        return view('admin.trendingnews.edit-trendingnews',[
            'trendingnews'=>$trendingnews,
            'trendingnewss'=>trendingnews::all(),
        ]);
    }
    public function updatetrendingnews(Request $request){

        $trendingnews = trendingnews::find($request->trendingnewss_id);
        $trendingnews->trending_news = $request->trending_news;
        $trendingnews->publication_status = $request->publication_status;
        $trendingnews->save();
        return back();

    }
    public function deletetrendingnews($id){
        $trendingnews = trendingnews::find($id);
        $trendingnews-> delete();
        return back();
    }
}
