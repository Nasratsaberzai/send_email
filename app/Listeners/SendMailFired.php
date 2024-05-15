<?php

namespace App\Listeners;

use App\Events\SendEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\NotificationCronMail;

class SendMailFired
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendEmail $event): void
    {
        // $user= User::find($event->userid)->toArray();
        // Mail::send('notify', $user, function($message)use ($user){
        //     $message->to($user['email'])->subject('eventTesting');
        // });

   
        $users = DB::table('users')->get();
        $cvskills = DB::table('cv_skills')->get();
        $postjobs = DB::table('post_jobs')->latest()->get();

        foreach ($users as $user) {
            foreach ($cvskills as $cvskill) {
                foreach ($postjobs as $postjob) {
                    if ($cvskill->Skill == $postjob->Skill) {
                        Mail::to($user->email)->send(new NotificationCronMail);
                        break; // Terminate the innermost loop if a match is found
                    }
                }
            }
        }
    }
}
