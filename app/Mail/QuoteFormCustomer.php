<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuoteFormCustomer extends Mailable
{
    use Queueable, SerializesModels;

    public $qoute;
    public $inventory;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($qoute, $inventory)
    {
        $this->qoute = $qoute;
        $this->inventory = $inventory;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.quote-form-customer');
    }
}
