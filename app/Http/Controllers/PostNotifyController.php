<?php

namespace App\Http\Controllers;

use App\Notifications\newsubcribernotify;
use App\notifyy;
use App\subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Notification;

class PostNotifyController extends Controller
{
    public function postnotification(){
        return view('admin.post-notificaiton.post-notificaiton');
    }

    public function addpostnotificaiton(Request $request){
        $post = new notifyy();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->video_link = $request->video_link;
        $post->save();

        $subscribers = subscribe::all();
        foreach ($subscribers as $subscriber)
        {
          Notification::route('mail',$subscriber->email)
               ->notify(new newsubcribernotify($post));
        }

        Artisan::call('queue:work');

        return back()->with('success','Post Notification Send Successfully');


    }
}
