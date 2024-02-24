<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $user;
    public $password;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
   

        
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $type = "new_user";
      
      
        if($this->user->usertype ){
            $subject = "Welcome ".$this->user->firstName;
            $message = "Congratulations! Your registration was successful. It's currently awaiting approval. You'll receive an email once it's approved.";
        }else{
            $subject = "Welcome ".$this->user->name;
            $message = "Congratulations! Your registration was successful.";
           
        }
       
 
  
        return (new MailMessage)
            ->subject($subject)
            ->line($message)
            ->view("emails.email-template1", ["content" => $message]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
