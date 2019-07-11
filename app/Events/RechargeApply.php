<?php

namespace App\Events;

use App\Models\Recharge;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RechargeApply
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $recharge;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Recharge $recharge)
    {
        $this->recharge = $recharge;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
