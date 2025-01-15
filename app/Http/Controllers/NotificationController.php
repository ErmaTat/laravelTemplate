<?php

namespace App\Http\Controllers;
use Illuminate\Notifications\Notification;
use App\Notifications\UpdateNotification;
use App\Models\User;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function index(){
        return view('backend.pages.notifications.index');
    }

    public function send(){
        $users = User::all(); 
        $message = 'A new update is available on the application!';

        $users->each(function ($user) use ($message) {
            $user->notify(new UpdateNotification($message));
        });
    
        return back();
    }
}
