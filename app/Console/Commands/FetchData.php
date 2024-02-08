<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Province;
use App\Models\City;
use GuzzleHttp\Client;

class FetchData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:fetch-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch data Provinsi dan Kota RajaOngkir API';

    /**
     * Execute the console command.
     */

     public function __construct()
     {
         parent::__construct();
     }

     public function handle()
    {
        $client = new Client();
        $response = $client->get('https://api.rajaongkir.com/starter/province', [
            'headers' => [
                'key' => '0df6d5bf733214af6c6644eb8717c92c',
            ],
        ]);
        $provinces = json_decode($response->getBody(), true)['rajaongkir']['results'];

        foreach ($provinces as $province) {
            Province::updateOrCreate(
                ['province_id' => $province['province_id']],
                ['name' => $province['province']]
            );

            $response = $client->get('https://api.rajaongkir.com/starter/city', [
                'headers' => [
                    'key' => '0df6d5bf733214af6c6644eb8717c92c',
                ],
                'query' => [
                    'province' => $province['province_id'],
                ],
            ]);

            $cities = json_decode($response->getBody(), true)['rajaongkir']['results'];

            foreach ($cities as $city) {
                City::updateOrCreate(
                    ['city_id' => $city['city_id']],
                    [
                        'province_id' => $province['province_id'],
                        'province' => $city['province'],
                        'type' => $city['type'],
                        'city_name' => $city['city_name'],
                        'postal_code' => $city['postal_code'],
                    ]
                );
            }
        }

        $this->info('Province and city data fetched and saved successfully.');
    }
}
