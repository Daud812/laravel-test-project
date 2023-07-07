<?php
  
  namespace App\Mail;

  use Illuminate\Bus\Queueable;
  use Illuminate\Contracts\Queue\ShouldQueue;
  use Illuminate\Mail\Mailable;
  use Illuminate\Mail\Markdown;
  use Illuminate\Queue\SerializesModels;
  use Illuminate\Contracts\Mail\Mailer as MailerContract;
  use Illuminate\Contracts\Mail\Mailable as MailableContract;
  
  class DemoMail extends Mailable
  {
      use Queueable, SerializesModels;
  
      public $mailData;
  
      /**
       * Create a new message instance.
       */
      public function __construct($mailData)
      {
          $this->mailData = $mailData;
      }
  
      /**
       * Build the message.
       *
       * @return $this
       */
      public function build()
      {
          return $this->subject('Demo Mail')
                      ->markdown('mail')
                      ->with($this->mailData);
      }
  }