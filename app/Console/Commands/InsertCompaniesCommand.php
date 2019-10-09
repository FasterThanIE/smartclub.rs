<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InsertCompaniesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'companies:insert';

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

        $file = file_get_contents(storage_path()."/data.json");
        $data = json_decode($file, true);

        $pdo = DB::connection()->getPdo();

        foreach($data as $info)
        {
          $stmt = $pdo->prepare("
                INSERT IGNORE INTO companies (name, url , county, full_name, location, address, phone, website, mb, pib, active_funds, income, neto, employees, score )
                VALUES (:name, :url , :county, :full_name, :location, :address, :phone, :website, :mb, :pib, :active_funds, :income, :neto, :employees, :score )
          ");

          $stmt->bindParam(':name', $info['name'], \PDO::PARAM_STR);
          $stmt->bindParam(':url', $info['url'], \PDO::PARAM_STR);
          $stmt->bindParam(':county', $info['county'], \PDO::PARAM_STR);
          $stmt->bindParam(':full_name', $info['full_name'], \PDO::PARAM_STR);
          $stmt->bindParam(':location', $info['location'], \PDO::PARAM_STR);
          $stmt->bindParam(':address', $info['address'], \PDO::PARAM_STR);
          $stmt->bindParam(':phone', $info['phone'], \PDO::PARAM_INT);
          $stmt->bindParam(':website', $info['website'], \PDO::PARAM_STR);
          $stmt->bindParam(':mb', $info['mb'], \PDO::PARAM_INT);
          $stmt->bindParam(':pib', $info['pib'], \PDO::PARAM_INT);
          $stmt->bindParam(':active_funds', $info['active_funds'], \PDO::PARAM_INT);
          $stmt->bindParam(':income', $info['income'], \PDO::PARAM_INT);
          $stmt->bindParam(':neto', $info['neto'], \PDO::PARAM_INT);
          $stmt->bindParam(':employees', $info['employees'], \PDO::PARAM_INT);
          $stmt->bindParam(':score', $info['score'], \PDO::PARAM_STR);

          $stmt->execute();
          echo "dodata nova kompanija sa ".$info['pib']."\n";


        }


    }
}
