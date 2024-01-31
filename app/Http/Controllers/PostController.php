<?php

namespace App\Http\Controllers;

use App\category;
use App\Notifications\InvoicePaid;
use App\Notifications\newsubcribernotify;
use App\post;
use App\subcategory;
use App\subscribe;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{
    public function post(){
        return view('admin.post.add-post',[
            'categorys'=>category::all(),
            'subcats'=>subcategory::all(),
        ]);
    }
    public function addpost(Request $request){
        $request->validate([
            'title' => 'required|unique:posts|max:80',
            'category_id' => 'required',
            'description' => 'required|unique:posts',
//            'image' => 'required|mimes:jpeg,bmp,png',
        ]);
        $post = new post();
        $post->category_id = $request->category_id;
        $post->name = Auth::guard('admin')->user()->name;
        $post->title = $request->title;
        $post->subcategory_id = $request->subcategory_id;

        if($request->slug==null){
            $post->slug = preg_replace('/\s+/u', '-', trim($request->title));
        }
        else {
            $post->slug = preg_replace('/\s+/u', '-', trim($request->slug));
        }
        $post->description = $request->description;
        $post->video_link = $request->video_link;
        $post->is_approve = false;
        $post->publication_status = true;
        $post->image = $this->saveimage($request);
        $post->breaking_news = $request->breaking_news;
        $post->save();
//        $subscribers = subscribe::all();
//        foreach ($subscribers as $subscriber)
//        {
//            Notification::route('mail',$subscriber->email)
//                ->notify(new InvoicePaid($post));
//        }
        return redirect('manage-post')->with('success','Add New Post, Please wait for Author approve');
    }
    private function saveimage(Request $request){
        $image =$request->file('image');
        $imagename = rand().$image->getClientOriginalExtension();
        $director= 'images/post/';
        $imgurl= $director.$imagename;
        $image->move($director,$imagename);
        return $imgurl;
    }
    public function selectsubcategory($id){
        $selectsubcategory = subcategory::where('category_id',$id)->get();
        echo view('admin.sub-category.sub-category-content',[
            'subCategoriesByCategoryId'=>$selectsubcategory,
        ]);
    }
    public function managepost(){
        $post = DB::table('posts')
            ->join('categories','categories.id', '=','posts.category_id')
//            ->join('subcategories','subcategories.id', '=','posts.subcategory_id')
            ->select('posts.*','categories.category_name')
            ->orderby('id','desc')
            ->paginate(10);
        return view('admin.post.manage-post',[
            'posts'=>$post,
        ]);
    }
    public function editpost($id){
        $post = post::find($id);
        $subcat = subcategory::where('id',$post->subcategory_id)->get();
        $category =  category::where('id',$post->category_id)->get();
//        $post = DB::table('posts')
//            ->join('categories','categories.id', '=','posts.category_id')
//            ->join('subcategories','subcategories.id', '=','posts.subcategory_id')
//            ->select('posts.*','categories.category_name','subcategories.subcategory_name')
//            ->where('posts.id',$id)
//            ->first();
        return view('admin.post.edit-post',[
            'post'=>$post,
            'categorys'=>$category,
            'subcats'=>$subcat,
        ]);
    }
    public function updatepost(Request $request){
        $image =$request->file('image');
        if ($image) {
            $post = post::find($request->post_id);
            unlink($post->image);
            $imgurl = $this->updatebasicimageinfo($image);
            $this->upadatebasicpostinfo($request, $imgurl);
        }
        else{
            $this->upadatebasicpostinfo($request);
        }
        return redirect('manage-post')->with('success','Update New Post Successfully');

    }
    private function upadatebasicpostinfo($request,$imgurl=null){
        $post= post::find($request->post_id);
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->subcategory_id = $request->subcategory_id;
        $post->slug = preg_replace('/\s+/u', '-', trim($request->slug));
        $post->description = $request->description;
        $post->video_link = $request->video_link;
        $post->publication_status = true;
        if($imgurl){
            $post->image=$imgurl;
        }
        $post->breaking_news = $request->breaking_news;
        $post->save();
    }
    private function updatebasicimageinfo($image){
        $imagename = rand().$image->getClientOriginalExtension();
        $director= 'images/post/';
        $imgurl= $director.$imagename;
        $image->move($director,$imagename);
        return $imgurl;
    }
    public function viewpost($id){
        $post = post::find($id);
        $subcat = subcategory::where('id',$post->subcategory_id)->get();
        $category =  category::where('id',$post->category_id)->first();
//        return $category;
//        $post = DB::table('posts')
//            ->join('categories','categories.id', '=','posts.category_id')
//            ->join('subcategories','subcategories.id', '=','posts.subcategory_id')
//            ->select('posts.*','categories.category_name','subcategories.subcategory_name')
//            ->where('posts.id',$id)
//            ->first();
        return view('admin.post.view-post',[
            'post'=>$post,
            'subcats'=>$subcat,
            'category'=>$category,
        ]);
    }
    public function deletepost($id){
        $post = post::find($id);
        $post->delete();
        return back()->with('success','Deleted Successfully');
    }
    public function publicationpost($id){
        $post = post::find($id);
        $post->publication_status= 0;
        $post->save();
        return back();
    }
    public function unpublicationpost($id){
        $post = post::find($id);
        $post->publication_status= 1;
        $post->save();
        return back();
    }

    public function approve(){
        $post = DB::table('posts')
            ->join('categories','categories.id', '=','posts.category_id')
//            ->join('subcategories','subcategories.id', '=','posts.subcategory_id')
            ->select('posts.*','categories.category_name')
            ->orderby('id','desc')
            ->paginate(10);
        return view('admin.approve.approve',[
            'posts'=>$post,
        ]);
    }

         public function approvepost($id){
         $post = post::find($id);
         $post->is_approve= true;
         $post->save();
         return back();
    }


}
