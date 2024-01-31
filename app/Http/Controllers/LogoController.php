<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logo;

class LogoController extends Controller
{
    public function logo(){
        return view('admin.logo.logo',[
            'Logos'=>logo::all(),
        ]);
    }
    public function addlogo(Request $request){

        $request->validate([
            'image' => 'required|mimes:jpeg,bmp,png',
        ]);

        $category = new logo();
        if($request->image){
            $category->image = $this->saveimage($request);
        }
        $category->publication_status = $request->publication_status;
        $category->save();
        return back();
    }

    public function saveimage(Request $request)
    {
        $image =$request->file('image');
        $imagename = rand().$image->getClientOriginalExtension();
        $director= 'images/logo/';
        $imgurl= $director.$imagename;
        $image->move($director,$imagename);
        return $imgurl;
//        $image = $request->file('image');
//        $imagename =rand() . $image->getClientOriginalExtension();
//       $director = 'images/category/';
//      $imgurl = $director.$imagename;
//        $imgFile = Image:: make($image->getRealPath());
//        $imgFile->text('© 2017-2021 tutsmake.com - All Rights Reserved', 120, 100, function($font) {
//            $font->size(35);
//            $font->color('#ffffff');
//            $font->align('center');
//            $font->valign('bottom');
//            $font->angle(90);
//        })->save(public_path('images/category/').'/'.$imagename);
//      return $imgurl;
    }

    public function publicationlogo($id){
        $product = logo::find($id);
        $product->publication_status= 0;
        $product->save();
        return back();
    }
    public function unpublicationlogo($id){
        $product = logo::find($id);
        $product->publication_status= 1;
        $product->save();
        return back();
    }
    public function editlogo($id){
        $logo = logo::find($id);
        return view('admin.logo.edit-logo',[
            'logo'=>$logo,
            'logos'=>logo::all(),
        ]);
    }
    public function updatelogo(Request $request){

        $request->validate([
            'image' => 'required|mimes:jpeg,bmp,png',
        ]);

        $image =$request->file('image');
        if($image){
            $category = logo::find($request->logos_id);
            unlink($category->image);
            $imgul = $this->updatebasicimageinfo($image);
            $this->updatebasiccategoryinfo($request,$imgul);
        }else{
            $this->updatebasiccategoryinfo($request);
        }
        return redirect('/logo');
    }
    private function updatebasiccategoryinfo($request,$imgurl=Null){
        $category = logo::find($request->logos_id);
        if($imgurl){
            $category->image=$imgurl;
        }
        $category->publication_status = $request->publication_status;
        $category->save();
    }
    private function updatebasicimageinfo($image){
        $imagename = rand().$image->getClientOriginalExtension();
        $director = 'images/logo/';
        $imgul = $director . $imagename;
        $image->move($director, $imagename);
        return $imgul;
    }
    public function deletelogo($id){
        $category = logo::find($id);
        $category-> delete();
        return back();
    }
}
