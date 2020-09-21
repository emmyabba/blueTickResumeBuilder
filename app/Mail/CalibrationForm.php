<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CalibrationForm extends Mailable
{
    use Queueable, SerializesModels;

    public $calibration;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($calibration)
    {
        $this->calibration = $calibration;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.calibration-form');
    }
}
