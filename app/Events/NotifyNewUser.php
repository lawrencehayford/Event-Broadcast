<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NotifyNewUser implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    protected $userId;
    protected $userData;

    public function __construct($userId, $userData)
    {
        //
        $this->userId = $userId;
        $this->userData = $userData;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        //return new Channel('test-channel');
        return new Channel('new-user');
    }

    /**
     * Get the data to broadcast.
     *
     * @author UserData
     *
     * @return array
     */

    public function broadcastWith()
    {
        return [
            'userId' => $this->userId,
            'userData' => $this->userData,
        ];
    }
}
