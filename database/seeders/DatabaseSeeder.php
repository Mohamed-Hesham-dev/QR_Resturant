<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        $this->call(AdminSeeder::class);
        $this->call(ContactUsSettingSeeder::class);
        $this->call(AboutUsSettingSeeder::class);
      //  $this->call(ResturantContactUsSettingSeeder::class);
=======
        // $this->call(AdminSeeder::class);
        // $this->call(ContactUsSettingSeeder::class);
        // $this->call(AboutUsSettingSeeder::class);
        $this->call(ResturantContactUsSettingSeeder::class);
>>>>>>> 3d700c8d0fecbc40a636229375dcdd8d439b30a6
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
