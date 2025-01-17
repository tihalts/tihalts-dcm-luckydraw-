<?php

namespace App\Events;

use App\User;
use App\Customer;
use App\Purchase;
use Illuminate\Support\Facades\Log;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CreatePurchase
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $customer;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Customer $customer , User $user)
    {
        $this->customer = $customer;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
