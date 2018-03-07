<?php

namespace App\Listeners;

use App\Events\CreatedFeedback;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\FeedbackMail;

class SendFeedback
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CreatedFeedback  $event
     * @return void
     */
    public function handle(CreatedFeedback $event)
    {
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new FeedbackMail($event->feedback));
    }
}
