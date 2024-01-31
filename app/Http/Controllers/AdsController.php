<?php

namespace App\Http\Controllers;

use App\ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use mysql_xdevapi\Table;
use phpDocumentor\Reflection\Types\Null_;
use Session;
use DB;


class AdsController extends Controller
{
    public function ads(){
        return view('admin.ads.add-ads');
    }
    public function addads(Request $request){
        $request->validate([
            'name' => 'required|max:20',
            'url' => 'required',
            'publication_status' => 'required',
            'start_ads' => 'required',
            'end_ads' => 'required',
        ]);

        $ads = new ads();
        $ads->positon = $request->positon;
        $ads->name = $request->name;
        if ($request->image==null){
        }
        else{
            $ads->image = $this->saveimage($request);
        }
        $ads->popup_image = $this->savepopupimage($request);
        $ads->url = $request->url;
        $ads->publication_status = $request->publication_status;
        $ads->start_ads = $request->start_ads;
        $ads->end_ads = $request->end_ads;
        $ads->save();
        return redirect('manage-ads');
    }
    private function saveimage(Request $request){
        $image =$request->file('image');
        $imagename = rand().'.'.$image->getClientOriginalExtension();
        $director= 'images/ads/';
        $imgurl= $director.$imagename;
        $image->move($director,$imagename);
        return $imgurl;
    }
    private function savepopupimage(Request $request){
        $image =$request->file('popup_image');
        $imagename = rand(). '.' .$image->getClientOriginalExtension();
        $director= 'images/ads/popup-images/';
        $imgurl= $director.$imagename;
        $image->move($director,$imagename);
        return $imgurl;
    }
    public function manageads(){
        return view('admin.ads.manage-ads',[
            'ads'=>ads::all(),

        ]);
    }
    public function editads($id){
        $ads = ads::find($id);
       return view('admin.ads.edit-ads',[
           'ads'=>$ads,
       ]);
    }
    public function publicationads($id){
        $post = ads::find($id);
        $post->publication_status= 0;
        $post->save();
        return back();
    }
    public function unpublicationads($id){
        $post = ads::find($id);
        $post->publication_status= 1;
        $post->save();
        return back();
    }
    public function updateads(Request $request )
    {
//        ..popup_image....
        $images =$request->file('popup_image');
        if ($images){
            $adss = ads::find($request->adss_id);
            unlink($adss->popup_image);
            $imgurls = $this->updatebasicpopupimage($images);
            $this->updatebasicadssinfo($request,$imgurls);
        }
        else{
            $this->updatebasicadsinfo($request);
        }


//        end....popup image

        $image =$request->file('image');
        if ($image){
            $ads = ads::find($request->adss_id);
            unlink($ads->image);
            $imgurl = $this->updatebasicimageinfo($image);
            $this->updatebasicadsinfo($request,$imgurl);
        }
        else{
            $this->updatebasicadsinfo($request);
        }

        return redirect('/manage-ads')->with('success','Update Successfully');
    }

    private function updatebasicadsinfo( $request,$imgurl=Null){
        $ads = ads::find($request->adss_id);
        $ads->positon = $request->positon;
        $ads->name = $request->name;
        if ($imgurl){
            $ads->image=$imgurl;
        }
        $ads->url = $request->url;
        $ads->publication_status = $request->publication_status;
        $ads->start_ads = $request->start_ads;
        $ads->end_ads = $request->end_ads;
        $ads->save();
    }
    private function updatebasicadssinfo($request,$imgurls){
        $ads = ads::find($request->adss_id);
        if ($imgurls){
            $ads->popup_image=$imgurls;
        }
        $ads->save();

    }


    private function updatebasicimageinfo($image){
        $imagename = rand().$image->getClientOriginalExtension();
        $director= 'images/ads/';
        $imgurl= $director.$imagename;
        $image->move($director,$imagename);
        return $imgurl;
    }
    public function updatebasicpopupimage($images){
        $imagenames = rand(). '.' .$images->getClientOriginalExtension();
        $directors= 'images/ads/popup-images/';
        $imgurls= $directors.$imagenames;
        $images->move($directors,$imagenames);
        return $imgurls;
    }

    public function deleteads($id){
        $ads = ads::find($id);
        $ads->delete();
        return back();
    }
    public function selectads(){
        echo view('admin.ads.select-ads');
    }
    public function selectads2(){
        echo view('admin.ads.select-ads2');
    }
    public function selectads3(){
        echo view('admin.ads.select-ads3');
    }
    public function selectads4(){
        echo view('admin.ads.select-ads4');
    }
}
