<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Event;
use App\Models\User;

class SendCourse extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Confirmation event subscription";
    public $username;
    public $title;
    public $date;
    //public $data;
    //public $subject = "Confirmación del curso";
    //public $user;
    //public $title;
    //public $date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $username, $event)
    {
        //$data
        //$this->$data = $data;
        //$this->name = "Cecilia";
        //$this->date = $event->date_time;
        //$this->user = $user;
        //$this->title = $event->title;
        $this->date = $event->date_time;
        $this->username = $username;
        $this->title = $event->title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email');
    }
}
