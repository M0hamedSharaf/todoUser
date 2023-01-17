<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DeletesAllUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:delete {--count=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deletes All Users Records';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $counts = $this->option(key: 'count');
        // $num = intval($counts);

        if($counts > 0 )
        {
            $max= User::max('id');
            $min= User::min('id');
            for ($i=1; $i < $counts; $i++)
            { 
                $resultRand = rand( $max, $min);
                User::where('id',$resultRand)->delete();
            }
            $this->info("[===== Delete Some Row In Table =====]");
            dd('thats right');
        }
        else
        {
            DB::table('users')->delete();
            $this->info('[===== Delete All Row In Table =====]');
        }

    }
}