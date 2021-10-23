<?php

use Illuminate\Database\Seeder;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //1
      App\Forum::create([
          'Category' => 'Kilimo',
          'Category_Description' => 'A place for the community to talk and chat about agriculture! ',
          'Category_Image' => '1633429307.png',
          'Topics' => 0,
          'Posts' => 0,
          'created_at' => '2021-09-27 08:30:18',
          'updated_at' => '2021-10-12 02:24:30',
      ]);

      //2
      App\Forum::create([
          'Category' => 'Usafirishaji',
          'Category_Description' => 'Everything about the transportation of agriculture products',
          'Category_Image' => '1633814279.png',
          'Topics' => 0,
          'Posts' => 0,
          'created_at' => '2021-09-27 08:30:18',
          'updated_at' => '2021-10-12 02:24:30',
      ]);

    }
}
