<?php

namespace App\Console\Commands;

use App\Mail\NotificationCronMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\CvSkill;
use App\Models\PostJob;


class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:sendMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail to all users by runnig this command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $users = DB::table('users')->get();
        // $cvskills = DB::table('cv_skills')->get();
        // $postjobs = DB::table('post_jobs')->latest()->get();
    
        // foreach ($users as $user) {
        //     foreach ($cvskills as $cv) {
        //         foreach ($postjobs as $post) {
        //             if ($cv->Skill && $post->Skill ==true) {
        //                 Mail::to($user->email)->send(new NotificationCronMail);
        //                 break; // Terminate the innermost loop if a match is found
        //             }
        //         }
        //     }
        // }
    // }
    // $usersMail = User::select('name', 'email')->get();
    // $emails = [];
    // foreach ($usersMail as $mail) {
    //     $emails[] = $mail['email'];
    // }
    // Mail::send('notify', [], function ($message) use ($emails) {
    //     $message->to($emails)->subject('This is a test mail for cron');
    // });
// }
}
}
