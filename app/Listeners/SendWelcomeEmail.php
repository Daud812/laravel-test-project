<?php

namespace App\Listeners;

use App\Events\UserRegistered;

class SendWelcomeEmail
{
    public function handle(UserRegistered $event)
    {
        // Logic to send welcome email to the registered user
        $user = $event->user;
        // Send email using your email service or Laravel's Mail class
        // ...
    }
}