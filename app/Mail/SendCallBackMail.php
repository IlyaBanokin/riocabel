<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCallBackMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $phone;

    public $subject = "Сообщение с сайта: 'Просьба перезвонить'";

    /**
     * SendContacts constructor.
     * @param $name
     * @param $phone
     */
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view(env('THEME') . '.shop.mail.sendCallBack',
            [
                'name' => $this->name,
                'phone' => $this->phone,
            ]);
    }
}
