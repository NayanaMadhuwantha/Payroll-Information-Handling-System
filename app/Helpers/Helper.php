<?php


namespace App\Helpers;


use App\Models\Notification;
use App\Models\User;

class Helper
{
    public static function createNotification($message)
    {
        $users = User::where('position','admin')->get();

        foreach ($users as $user) {
            $notification = new Notification();
            $notification->user_id = $user->id;
            $notification->notification = $message;
            $notification->save();
        }
    }
}
