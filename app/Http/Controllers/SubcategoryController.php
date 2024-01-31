<?php

namespace App\Http\Controllers;

use App\category;
use App\subcategory;
use Illuminate\Http\Request;
use DB;

class SubcategoryController extends Controller
{
    public function subcategory(){
        $subcategorys = DB::table('subcategories')
            ->join('categories','categories.id', '=','subcategories.category_id')
            ->select('categories.*','subcategories.*')
            ->get();
        return view('admin.sub-category.sub-category',[
            'categorys'=>category::all(),
            'subcategorys'=>$subcategorys,
        ]);
    }
    public function addsubcat(Request $request){

        $request->validate([
            'subcategory_name' => 'required|max:50|unique:subcategories',
            'image' => 'required|mimes:jpeg,bmp,png',
        ]);


        $subcategory = new subcategory();
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->image = $this->saveimage($request);
        $subcategory->publication_status = $request->publication_status;
        $subcategory->save();
        return back();
    }

    private function saveimage(Request $request)
    {
        $image = $request->file('image');
        $imagename = rand().$image->getClientOriginalExtension();
        $director = 'images/sub-category/';
        $imgurl = $director.$imagename;
        $image->move($director, $imagename);
        return $imgurl;
    }
    public function publicationsubcategory($id){
        $subcategory = subcategory::find($id);
        $subcategory->publication_status= 0;
        $subcategory->save();
        return back();
    }
    public function unpublicationsubcategory($id){
        $subcategory = subcategory::find($id);
        $subcategory->publication_status= 1;
        $subcategory->save();
        return back();
    }
    public function editsubcategory($id){
        $subcategorys = DB::table('subcategories')
            ->join('categories','categories.id', '=','subcategories.category_id')
            ->select('categories.*','subcategories.*')
            ->get();
        return view('admin.sub-category.edit-subcategory',[
            'categorys'=>category::all(),
            'subcategorys'=>$subcategorys,
            'subcats'=>subcategory::find($id),
        ]);
    }
    public function updatesubcat(Request $request){
        $request->validate([
            'subcategory_name' => 'required|max:50',
            'image' => 'mimes:jpeg,bmp,png',
        ]);
        $image = $request->file('image');
        if ($image){
            $subcat =subcategory::find($request->subcategory_id);
            unlink($subcat->image);
            $imgul = $this->updateimagebasicinfo($image);
            $this->updatesubcatbasicinfo($request,$imgul);
        }else{
            $this->updatesubcatbasicinfo($request);
        }
        return redirect('/subcategory');
    }
    private function updatesubcatbasicinfo($request,$imgul=null){
        $subcat = subcategory::find($request->subcategory_id);
        $subcat->category_id = $request->category_id;
        $subcat->subcategory_name = $request->subcategory_name;
        if ($imgul){
            $subcat->image=$imgul;
        }
        $subcat->publication_status = $request->publication_status;
        $subcat->save();
    }
    private function updateimagebasicinfo($image){
        $imagename = rand().$image->getClientOriginalExtension();
        $director = 'images/sub-category/';
        $imgurl = $director.$imagename;
        $image->move($director, $imagename);
        return $imgurl;
    }

}
