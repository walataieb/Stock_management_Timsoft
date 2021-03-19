<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $cities = [
            [
                'id'         => 1,
                'name'       => 'Tunis',
                'country_id' => '1',
            ],
           [
                'id'         => 2,
                'name'       => 'Ben Arous',
                'country_id' => '1',
            ],
           [
                'id'         => 3,
                'name'       => 'Ariana',
                'country_id' => '219',
            ],
           [
                'id'         => 4,
                'name'       => 'Nabeul',
                'country_id' => '1',
            ],
           [
                'id'         => 5,
                'name'       => 'Sousse',
                'country_id' => '1',
            ],
           [
                'id'         => 6,
                'name'       => 'Sfax',
                'country_id' => '1',
            ],
           [
                'id'         => 7,
                'name'       => 'Bèja',
                'country_id' => '1',
            ],
           [
                'id'         => 8,
                'name'       => 'Jendouba',
                'country_id' => '1',
            ],
           [
                'id'         => 9,
                'name'       => 'Kef',
                'country_id' => '1',
            ],
           [
                'id'         => 10,
                'name'       => 'Siliana',
                'country_id' => '1',
            ],
           [
                'id'         => 11,
                'name'       => 'kairouan',
                'country_id' => '1',
            ],
           [
                'id'         => 12,
                'name'       => 'Gabes',
                'country_id' => '1',
            ],
           [
                'id'         => 13,
                'name'       => 'Monastir',
                'country_id' => '1',
            ],
           [
                'id'         => 14,
                'name'       => 'Mahdia',
                'country_id' => '1',
            ],
           [
                'id'         => 15,
                'name'       => 'Bizerte',
                'country_id' => '1',
            ],
           [
                'id'         => 16,
                'name'       => 'Gafsa',
                'country_id' => '1',
            ],
           [
                'id'         => 17,
                'name'       => 'Kasserine',
                'country_id' => '1',
            ],
           [
                'id'         => 18,
                'name'       => 'kébili',
                'country_id' => '1',
            ],
           [
                'id'         => 19,
                'name'       => 'Manouba',
                'country_id' => '1',
            ],
           [
                'id'         => 20,
                'name'       => 'Médenine',
                'country_id' => '1',
            ],
           [
                'id'         => 21,
                'name'       => 'Sidi Bouzid',
                'country_id' => '1',
            ],
           [
                'id'         => 22,
                'name'       => 'Tataouine',
                'country_id' => '1',
            ],
           [
                'id'         => 23,
                'name'       => 'Tozeur',
                'country_id' => '1',
            ],
           [
                'id'         => 24,
                'name'       => 'Zaghouan',
                'country_id' => '1',
            ],
        ];

        City::insert($cities);
    }
}
