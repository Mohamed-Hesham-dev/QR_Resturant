<?php

namespace Database\Seeders;

use App\Models\Resturant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResturantContactUsSettingSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resturant_contact_us_settings')->insert([
            'mobile' => '',
            'facebook' => '',
            'instagram' => '',
            'youtube' => '',
            'user_id'=>''
        ]);
    }
}
