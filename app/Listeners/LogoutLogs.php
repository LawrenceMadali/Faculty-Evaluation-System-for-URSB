<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use IlluminateAuthEventsLogout;
use Illuminate\Auth\Events\Logout;

use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogoutLogs
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  IlluminateAuthEventsLogout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        $event->subject = 'Logout';
        $event->description = 'Logout successful';

        // Session::flash('login-success', 'Hello ' . $event->user->name . ', welcome back!');
        activity($event->subject)
            ->by($event->user)
            ->withProperties(['attributes' => [
                'name' => $event->user->name
                ]])
            ->log($event->description);
    }
}
