<?php

namespace App\Http\Controllers;

use App\ads;
use App\category;
use App\counter;
use App\post;
use App\subcategory;
use App\subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $counter = counter::all();
      $post = DB::table('posts')->count();
      $registrations = DB::table('admins')->count();
      $pendingpost = DB::table('posts')->where('is_approve',0)->count();
      $todayspost = post::whereDate('created_at',Carbon::today())->count();
      $category = category::all()->count();
      $subcat = subcategory::all()->count();
      $totalroles = DB::table('roles')->count();
      $totalsubcribe = subscribe::all()->count();
      $tatalads = ads::all()->count();
      $todayspupularnews = DB::table('posts')->where('category_id',12)->whereDate('created_at',Carbon::today())->count();
      $todaystotalapprove = post::where('is_approve',true)->whereDate('created_at',Carbon::today())->count();

        return view('admin.home.home',compact('post','counter','registrations','pendingpost','todayspost','category','subcat','totalroles','totalsubcribe','tatalads','todayspupularnews','todaystotalapprove'));
    }
}
