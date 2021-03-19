<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            [
                'id'         => 1,
                'name'       => 'Tunisie',
                'short_code' => 'tn',
            ],
        ];

        Country::insert($countries);
    }
}
