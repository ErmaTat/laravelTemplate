<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UpdateNotification extends Notification implements ShouldBroadcast
{
    use Queueable;

    public $updateMessage;

    public function __construct($updateMessage)
    {
        $this->updateMessage = $updateMessage;
    }

    public function via(object $notifiable): array
    {
        return ['database', 'broadcast']; 
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => $this->updateMessage,
        ];
    }

    
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

  
    public function toBroadcast($notifiable)
    {
        return [
            'message' => $this->updateMessage,
        ];
    }

    public function broadcastOn()
    {
        return ['updates'];
    }
}
