<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $countries = [
            [
                'name' => 'US',
                'rate' => 2
            ],
            [
                'name' => 'UK',
                'rate' => 2
            ],
            [
                'name' => 'CN',
                'rate' => 2
            ]
        ];

        foreach ($countries as $key => $value) {
            Country::create($value);
        }
    }
}
