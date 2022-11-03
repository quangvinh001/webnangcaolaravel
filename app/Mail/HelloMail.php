<?php

namespace App\Mail;

use App\Models\Bill;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use SplSubject;

class HelloMail extends Mailable
{
    use Queueable, SerializesModels;

        public $bill;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Bill $bill)
    {
        $this->bill = $bill;
        $this->queue = "email";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this
        ->Subject("Xin Chào Quý Khách")
        ->view('banhang.sub');
        
    }
}
