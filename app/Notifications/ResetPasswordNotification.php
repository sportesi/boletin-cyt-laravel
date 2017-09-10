<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reestablecer Contraseña')
            ->greeting('Hola!')
            ->salutation('Saludos')
            ->line('Estas recibiendo este email porque recibimos una solicitud para reestablecer la contraseña de tu cuenta.')
            ->action('Reestablecer Contraseña', url(config('app.url') . route('password.reset', $this->token, false)))
            ->line('Si no solicitaste reestablecer tu contraseña, no hace falta ninguna acción de más.');
    }
}
