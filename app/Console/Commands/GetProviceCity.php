<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RajaOngkir;
use App\City;
use App\Province;

class GetProviceCity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'provincecity:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save provinces and city to database';

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
      $provinsi = RajaOngkir::Provinsi()->all();
      Province::truncate();
      foreach($provinsi as $value){
        $data = new Province;
        $data->province = $value['province'];
        $data->save();
        $this->info($value['province'] . "has been saved!");
      }

      $kota = RajaOngkir::Kota()->all();
      City::truncate();
      foreach ($kota as $value) {
        $data = new City;
        $data->province_id = $value['province_id'];
        $data->province = $value['province'];
        $data->type = $value['type'];
        $data->city_name = $value['city_name'];
        $data->postal_code = $value['postal_code'];
        $data->save();
        $this->info($value['city_name'] . "has been saved!");
      }

      $this->info('All done !!!');
    }
}
