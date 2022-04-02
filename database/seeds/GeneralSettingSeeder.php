<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Billys Burgers',
            'logo_image_url' => '/img/clipart-restaurant-restaurant-logo-5.png',
            'address_1' => '5721 NW 7th St,',
            'address_2' => '',
            'city' => 'Miami',
            'state' => 'FL',
            'zipcode' => '33126',
            'phone_number' => '10571035',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
