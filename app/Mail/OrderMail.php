<?php

namespace App\Mail;

use PDF;
use App\UserOrder;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $userData;
    public $pdf;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($pdf, UserOrder $userorder)
    {
        $this->userData = $userorder;
        $this->pdf = $pdf;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        return $this->markdown('emails.order')->attachData($this->pdf->output(), 'order.pdf');
    }
}
