<?php

namespace App\Providers;

use App\Models\Notification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.app', function($view){
            if(auth()->user()){
                $user_id = auth()->user()->id;
            }else{
                $user_id = null;
            }
            $notifications = Notification::where('user_id',$user_id)->orderBy('id','DESC')->limit(10)->get();
            $view->with('notifications', $notifications);
        });
    }
}