<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => 'www.facebook.com/burgerking',
            'twitter_url' => 'www.twitter.com/burgerkind',
            'instagram_url' => 'www.instagram.com/burgerking',

            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
