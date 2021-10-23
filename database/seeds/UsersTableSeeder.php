<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\User::create([
          'user_name' => 'Davy Swai',
          'user_phone_number' => '+255767265780',
          'isVerified' => 1,
          'user_ocupation' => 'Mkulima',
          'user_location' => 'Mbeya, Kyela',
          'avatar' => 'default.jpg',
          'password' => '$2y$10$UQbrlKklZlI6KrbeP3CdMumDQmWWmZnrHjV22Mz5QMTiCBKX6Hrb6',
          'remember_token' => NULL,
          'created_at' => '2021-09-26 15:58:06',
          'updated_at' => '2021-09-26 15:58:33',
      ]);

      App\User::create([
          'user_name' => 'Kelvin Swai',
          'user_phone_number' => '+255755415312',
          'isVerified' => 1,
          'user_ocupation' => 'Msafirishaji',
          'user_location' => 'Arusha, Arusha Mjini',
          'avatar' => 'default.jpg',
          'password' => '$2y$10$UQbrlKklZlI6KrbeP3CdMumDQmWWmZnrHjV22Mz5QMTiCBKX6Hrb6',
          'remember_token' => NULL,
          'created_at' => '2021-09-26 15:58:06',
          'updated_at' => '2021-09-26 15:58:33',
      ]);


      App\User::create([
          'user_name' => 'Athuman',
          'user_phone_number' => '+255763778154',
          'isVerified' => 1,
          'user_ocupation' => 'Bwana_Shamba',
          'user_location' => 'Mbeya, Kyela',
          'avatar' => 'default.jpg',
          'password' => '$2y$10$UQbrlKklZlI6KrbeP3CdMumDQmWWmZnrHjV22Mz5QMTiCBKX6Hrb6',
          'remember_token' => NULL,
          'created_at' => '2021-09-26 15:58:06',
          'updated_at' => '2021-09-26 15:58:33',
      ]);

      App\User::create([
          'user_name' => 'Anuari',
          'user_phone_number' => '+255629954037',
          'isVerified' => 1,
          'user_ocupation' => 'Fundi_Na_Mashine_Za_Kilimo',
          'user_location' => 'Arusha, Arusha Mjini',
          'avatar' => 'default.jpg',
          'password' => '$2y$10$UQbrlKklZlI6KrbeP3CdMumDQmWWmZnrHjV22Mz5QMTiCBKX6Hrb6',
          'remember_token' => NULL,
          'created_at' => '2021-09-26 15:58:06',
          'updated_at' => '2021-09-26 15:58:33',
      ]);




    }
}
