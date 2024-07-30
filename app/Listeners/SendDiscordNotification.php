<?php

namespace App\Listeners;

use App\Events\JournalCreateEvent;
use App\Models\User;
use App\Notifications\DiscordWebhookNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class SendDiscordNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(JournalCreateEvent $event): void
    {
        $user = User::find($event->data['user_id']); // Assuming user_id is part of the event data
        $webhookUrl = $user->webhook_url;

        if ($webhookUrl) {
            $message = "Devotion Created: " . json_encode($event->data);
            Notification::route('discord', $webhookUrl)
                ->notify(new DiscordWebhookNotification($message, $webhookUrl, $user));
        }
    }
}