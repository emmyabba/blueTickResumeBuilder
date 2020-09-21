<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MaintenanceForm extends Mailable
{
    use Queueable, SerializesModels;

    public $repairs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($repairs)
    {
        $this->repairs = $repairs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.maintenance-form');
    }
}
