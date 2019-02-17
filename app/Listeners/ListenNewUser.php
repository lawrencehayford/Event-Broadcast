<?php

namespace App\Listeners;

use App\Events\NotifyNewUser;

class ListenNewUser
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
     * @param  NotifyNewUser  $event
     * @return void
     */
    public function handle(NotifyNewUser $event)
    {
        //
    }
}
