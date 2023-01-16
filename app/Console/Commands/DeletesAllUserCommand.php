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

        $count = $this->option(key: 'count');

        DB::table('users')->delete();

        echo "\n";
        $this->info('[===== تم خذف الجدول ارتحت كدا يعني =====]');
    }
}