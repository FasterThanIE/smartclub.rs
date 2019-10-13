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


        $count = 0;

        foreach($data as $info)
        {
          $stmt = $pdo->prepare("
                INSERT IGNORE INTO companies (name, url , county, full_name, location, address, phone, website, mb, pib, active_funds, income, neto, employees, score )
                VALUES (:name, :url , :county, :full_name, :location, :address, :phone, :website, :mb, :pib, :active_funds, :income, :neto, :employees, :score )
          ");

          $stmt->bindParam(':name', $info['ime'], \PDO::PARAM_STR);
          $stmt->bindParam(':url', $info['detailed_informations'], \PDO::PARAM_STR);
          $stmt->bindParam(':county', $info['Opstina'], \PDO::PARAM_STR);
          $stmt->bindParam(':full_name', $info['Pun naziv'], \PDO::PARAM_STR);
          $stmt->bindParam(':location', $info['Mesto'], \PDO::PARAM_STR);
          $stmt->bindParam(':address', $info['Adresa'], \PDO::PARAM_STR);
          $stmt->bindParam(':phone', $info['Telefon'], \PDO::PARAM_INT);
          $stmt->bindParam(':website', $info['Web'], \PDO::PARAM_STR);
          $stmt->bindParam(':mb', $info['MB'], \PDO::PARAM_INT);
          $stmt->bindParam(':pib', $info['PIB'], \PDO::PARAM_INT);
          $stmt->bindParam(':active_funds', str_replace([',','.'], ["",""], $info['Aktiva']), \PDO::PARAM_INT);
          $stmt->bindParam(':income', str_replace([',','.'], ["",""], $info['income']), \PDO::PARAM_INT);
          $stmt->bindParam(':neto', str_replace([',','.'], ["",""], $info['neto']), \PDO::PARAM_INT);
          $stmt->bindParam(':employees', str_replace([',','.'], ["",""], $info['employees']), \PDO::PARAM_INT);
          $stmt->bindParam(':score', $info['score'], \PDO::PARAM_STR);

          $stmt->execute();
          echo "dodata nova kompanija sa ".$info['PIB']."\n";
          $count++;
        }

        echo "Total $count";

    }
}
