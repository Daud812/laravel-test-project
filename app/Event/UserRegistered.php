<?php

namespace App\Events;

use Illuminate\Foundation\Events\Event;

class UserRegistered extends Event
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}
