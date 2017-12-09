<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegisteredNotification extends Notification
{
    use Queueable;

    /** @var User */
    private $user;

    /**
     * Create a new notification instance.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('¡Gracias por registrate!')
            ->greeting('¡Hola ' . ucwords($this->user->name) . '!')
            ->salutation('Saludos')
            ->line("Muchas gracias por registrarte en el Boletín Científico Tecnológico de la UAI.")
            ->line("Una vez que un administrador valide tu cuenta, podrás iniciar sesión en el sitio.");
    }
}
