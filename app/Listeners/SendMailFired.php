<?php

namespace App\Listeners;

use App\Events\SendPostJobEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
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
    public function handle(SendPostJobEmail $event): void
    {
        //get postJob from SendEmail parameters
        $postJobs = DB::table('post_jobs')->latest()->get();

        //Get all cv skill with skills that matches the current post job skills
        $cvSkills = DB::table('cv_skill')->where('Skills', $event->postJob->Skills)
            ->join('users', 'users.user_id', '=', 'cv_skill.user_id')
            ->get();

        //for each cv skill, get all the jobs that matches the skills
        foreach ($cvSkills as $cvSkill) {

            if(!empty($jobs)) { //ensure there are jobs available for this cv skill
                //send email to the user with the job information
                //Todo: Add job info to the notification
                Mail::to($cvSkill->user->email)->send(new NotificationCronMail);
            }

        }
        // $user= User::find($event->userid)->toArray();
        // Mail::send('notify', $user, function($message)use ($user){
        //     $message->to($user['email'])->subject('eventTesting');
        // });


        /*$users = DB::table('users')->get();


        foreach ($users as $user) {
            foreach ($cvskills as $cvskill) {
                foreach ($postjobs as $postjob) {
                    if ($cvskill->Skill == $postjob->Skill) {
                        Mail::to($user->email)->send(new NotificationCronMail);
                        break; // Terminate the innermost loop if a match is found
                    }
                }
            }
        }*/
    }
}
