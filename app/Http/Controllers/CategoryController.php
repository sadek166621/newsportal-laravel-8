<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;



class CategoryController extends Controller
{
    public function category(){
        return view('admin.category.add-category',[
            'categorys'=>category::orderby('id','desc')->paginate(10),
        ]);
    }
    public function addcategory(Request $request){

        $request->validate([
            'category_name' => 'required|unique:categories|max:50',
//            'image' => 'required|mimes:jpeg,bmp,png',
        ]);

        $category = new category();
        $category->category_name = $request->category_name;
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
        $director= 'images/category/';
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

    public function publicationcategory($id){
        $product = category::find($id);
        $product->publication_status= 0;
        $product->save();
        return back();
    }
    public function unpublicationcategory($id){
        $product = category::find($id);
        $product->publication_status= 1;
        $product->save();
        return back();
    }
    public function editcategory($id){
             $categorys = category::find($id);
                return view('admin.category.edit-category',[
            'categorys1'=>$categorys,
           'categorys'=>category::orderby('id','desc')->get(),
    ]);
    }
    public function updatecategory(Request $request){

        $request->validate([
            'category_name' => 'required|max:50',
//            'image' => 'required|mimes:jpeg,bmp,png',
        ]);

        $image =$request->file('image');
        if($image){
            $category = category::find($request->categorys_id);
            unlink($category->image);
            $imgul = $this->updatebasicimageinfo($image);
            $this->updatebasiccategoryinfo($request,$imgul);
        }else{
            $this->updatebasiccategoryinfo($request);
        }
        return redirect('/category');
    }
    private function updatebasiccategoryinfo($request,$imgurl=Null){
        $category = category::find($request->categorys_id);
        $category->category_name = $request->category_name;
        if($imgurl){
            $category->image=$imgurl;
        }
        $category->publication_status = $request->publication_status;
        $category->save();
    }
    private function updatebasicimageinfo($image){
        $imagename = rand().$image->getClientOriginalExtension();
        $director = 'images/category/';
        $imgul = $director . $imagename;
        $image->move($director, $imagename);
        return $imgul;
    }
    public function deletecategory($id){
        $category = category::find($id);
        $category-> delete();
        return back();
    }
}
