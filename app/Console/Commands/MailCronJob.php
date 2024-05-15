<?php
    

namespace App\Console\Commands;

use App\Mail\NotificationCronMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:mail-cron-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
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
        // }
    //     Mail::to($users->email)->send(new NotificationCronMail);
    // }

//     public function handle()
// {
//     $users = DB::table('users')->get();

//     foreach ($users as $user) {
//         Mail::to($user->email)->send(new NotificationCronMail);
//     }
// }
}
    }
}