<?php

namespace App\Http\Controllers;

use App\ads;
use App\category;
use App\counter;
use App\Notifications\newPostNotify;
use App\Notifications\newsubcribernotify;
use App\post;
use App\subcategory;
use App\subscribe;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
class NewsportalController extends Controller
{
    public function index(){
        $visitor = counter::latest();
        counter::increment('views');
        $post = post::where('breaking_news',1)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->get();
        $rightads = ads::where('positon',2)->where('publication_status',1)->orderby('id','desc')->first();
        $middleads = ads::where('positon',3)->where('publication_status',1)->orderby('id','desc')->first();
        $footereads = ads::where('positon',4)->where('publication_status',1)->orderby('id','desc')->first();
        $latestposts = post::where('category_id',1)->where('is_approve',1)->where('publication_status',1)->take(5)->orderby('id','desc')->get();
        $nationalposts = post::where('category_id',2)->where('is_approve',1)->where('publication_status',1)->take(1)->orderby('id','desc')->get();
        $coronaposts = post::where('category_id',3)->where('is_approve',1)->where('publication_status',1)->take(1)->orderby('id','desc')->get();
        $bangladeshposts = post::where('category_id',4)->where('is_approve',1)->where('publication_status',1)->take(1)->orderby('id','desc')->get();
        $bangladeshposts2 = post::where('category_id',4)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->skip(1)->take(3)->get();
        $coronaposts2 = post::where('category_id',5)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        $coronaposts3 = post::where('category_id',5)->where('is_approve',1)->where('publication_status',1)->orderby('id','asc')->skip(1)->take(4)->get();
        $countryandouts = post::where('category_id',6)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        $countryandouts2 = post::where('category_id',6)->where('is_approve',1)->where('publication_status',1)->orderby('id','asc')->skip(1)->take(4)->get();
        $sports = post::where('category_id',5)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        $sports2 = post::where('category_id',5)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->skip(1)->take(3)->get();
        $coronaposts4= post::where('category_id',7)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        $coronaposts5= post::where('category_id',7)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->skip(1)->take(3)->get();
        $banijjoposts= post::where('category_id',8)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        $banijjoposts2= post::where('category_id',8)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->skip(1)->take(3)->get();
        $videos= post::where('category_id',14)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        $sub_video= post::where('category_id',15)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->take(3)->get();
        $morenews= post::where('category_id',11)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->take(4)->get();
        $populerenews= post::where('category_id',12)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        $populerenews2= post::where('category_id',12)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->skip(1)->take(3)->get();
        $trendingnews= post::where('category_id',13)->where('is_approve',1)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        return view('frontEnd.home.home',
            compact('visitor','post','rightads','middleads','footereads','latestposts','nationalposts','coronaposts','bangladeshposts','bangladeshposts2','coronaposts2','coronaposts3','countryandouts','countryandouts2','sports','sports2','coronaposts4','coronaposts5','banijjoposts','banijjoposts2','videos','sub_video','morenews','populerenews','populerenews2','trendingnews'));
    }
    public function technology(){
        return view('frontEnd.technology.technology');
    }
    public function menucat($id){
        $populerenews= post::where('category_id',12)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        $populerenews2= post::where('category_id',12)->where('publication_status',1)->orderby('id','desc')->skip(1)->take(3)->get();
        $rightads = ads::where('positon',2)->where('start_ads', '<=', Carbon::now())->where('end_ads', '>=', Carbon::now())->where('publication_status',1)->orderby('id','desc')->first();
        return view('frontEnd.category.search-category',[
            'posts'=>post::where('category_id',$id)->where('publication_status',1)->paginate(6),
            'populerenews'=>$populerenews,
            'populerenews2'=>$populerenews2,
            'rightads'=>$rightads,
        ]);
    }
    public function details($slug){
        $populerenews= post::where('category_id',12)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        $populerenews2= post::where('category_id',12)->where('publication_status',1)->orderby('id','desc')->skip(1)->take(3)->get();
        $rightads = ads::where('positon',2)->where('start_ads', '<=', Carbon::now())->where('end_ads', '>=', Carbon::now())->where('publication_status',1)->first();
        //related post function
        $post = Post::where('slug', '=', $slug)->first();
        $categories=category::all();
        $related= Post::where('category_id', '=', $post->category_id)
            ->where('id', '!=', $post->id)
            ->get();
       ///end related post function
        return view('frontEnd.details.details',[
            'post' => post::where('slug',$slug)->first(),
            'rightads'=>$rightads,
            'populerenews'=>$populerenews,
            'populerenews2'=>$populerenews2,
        ])
        ->withPost($post)
        ->withCategories($categories)
        ->withRelated($related);

    }
    public function search(Request $request){

        $populerenews= post::where('category_id',12)->where('publication_status',1)->orderby('id','desc')->take(1)->get();
        $populerenews2= post::where('category_id',12)->where('publication_status',1)->orderby('id','desc')->skip(1)->take(3)->get();
        $rightads = ads::where('positon',2)->where('start_ads', '<=', Carbon::now())->where('end_ads', '>=', Carbon::now())->where('publication_status',1)->first();

        $this->validate($request, [
            'search' => 'required'
        ]);

        $search_txt = $request->search;

        $posts = Post::where('title', 'like', '%'.$search_txt.'%')
            ->orWhere('description', 'like', '%'.$search_txt.'%')
            ->paginate(6);


            return view('frontEnd.search.search',compact('populerenews','populerenews2','rightads'))->withPosts($posts);
    }
//    public function searchdata(){
//        return view('frontEnd.search.search');
//    }
    public function subscribe(Request $request){

        $this->validate($request, [
            'email' => 'required'
        ]);
        $subscribe = new subscribe();
        $subscribe->email= $request->email;
        $subscribe->save();

            Notification::route('mail',$request->email)
                ->notify(new newPostNotify($subscribe));

        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
    public function postdeatils($id){
        $postId = post::find($id);
        return json_encode($postId);
    }
    public function food(){
        return view('frontEnd.food.food');
    }
    public function architecture(){
        return view('frontEnd.architecture.architecture');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
    public function error(){
        return view('frontEnd.error.error');
    }

}
