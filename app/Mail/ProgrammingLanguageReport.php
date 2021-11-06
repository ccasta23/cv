<?php

namespace App\Mail;

use App\ProgrammingLanguage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProgrammingLanguageReport extends Mailable
{
    use Queueable, SerializesModels;

    private $programming_language;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ProgrammingLanguage $programming_language)
    {
        $this->programming_language = $programming_language;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('programming_languages.mail.report',[
            'programming_language' => $this->programming_language
        ]);
    }
}
