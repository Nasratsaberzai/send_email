<?php

namespace App\Events;

use App\Models\PostJob;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendPostJobEmail
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public PostJob $postJob;

    /**
     * Create a new event instance.
     */
    public function __construct(PostJob $postJob)
    {
        $this->postJob = $postJob;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('post-job-event'),
        ];
    }
}
