<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\Http;

class DiscordWebhookNotification extends Notification
{
    use Queueable;

    protected $message;
    protected $webhookUrl;
    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message, $webhookUrl, $user)
    {
        $this->message = $message;
        $this->webhookUrl = $webhookUrl;
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [];
    }

    /**
     * Send the notification via the Discord webhook.
     *
     * @param  mixed  $notifiable
     * @return void
     */
    public function toDiscord($notifiable)
    {
        // 'name' => auth()->user()->name,
        // 'verse' => $currentVerse,
        // 'journal_type' => $data['journal_type']
        $embed = [
            'title' => 'New Data Created',
            'description' => $this->message,
            'color' => 3447003,
            'author' => [
                'name' => $this->user->name,
                'icon_url' => $this->user->avatar // Make sure avatar_url is a circular image
            ],
            'fields' => [
                [
                    'name' => 'Details',
                    'value' => json_encode($this->message),
                    'inline' => true
                ]
            ],
            'thumbnail' => [
                'url' => $this->user->avatar // Thumbnail will show the avatar image
            ],
            'timestamp' => now()->toIso8601String()
        ];

        Http::post($this->webhookUrl, [
            'embeds' => [$embed]
        ]);
    }
}