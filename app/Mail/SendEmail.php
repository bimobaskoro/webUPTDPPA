<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param  string  $title
     * @param  string  $message
     * @return void
     */
    public function __construct($title, $message)
    {
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $content = "Title: {$this->title}\n" .
                   "Message: {$this->message}\n";

        return $this->subject($this->title)
                    ->view('email') // Gunakan nama view yang tidak ada
                    ->with(['content' => $content]);
    }
}
