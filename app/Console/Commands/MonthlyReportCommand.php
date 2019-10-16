<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MonthlyReportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:monthly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $pdo = DB::connection()->getPdo();

        $stmt = $pdo->prepare("
            SELECT c.name, cn.*
            From companies AS c
            INNER JOIN company_notes AS cn
            ON c.pib = cn.pib
        ");

        $stmt->execute();

        $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        var_dump($data);
    }
}
