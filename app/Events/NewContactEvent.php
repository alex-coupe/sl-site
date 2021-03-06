<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewContactEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $contact;
    public $filenames;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($contact, $filenames)
    {
        $this->contact = $contact;
        $this->filenames = $filenames;
    }

}
