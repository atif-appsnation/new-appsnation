<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CostCalculatorMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->view('leademail.cost_calculator')
            ->subject($this->details['subject'] ?? 'Cost Calculator Inquiry');
        if (!empty($this->details['from_email']) && !empty($this->details['from_name'])) {
            $email->from($this->details['from_email'], $this->details['from_name']);
        }
        return $email;
    }
} 