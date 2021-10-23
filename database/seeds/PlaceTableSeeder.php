<?php

use Illuminate\Database\Seeder;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //1
      App\Place::create([
          'Region' => 'Arusha',
          'District' => 'Arusha Mjini',
          'SoilPh' => '5-8.5',
          'SoilType' => 'Tifutifu, Kichanga na madini ya calcium, Mfinyanzi na rutuba ya kutosha',
          'PriorityCashCrops_1' => 'Kahawa',
          'PriorityCashCrops_2' => 'Maua',
          'PriorityCashCrops_3' => NULL,
          'PriorityFoodCrops_1' => 'Mahindi',
          'PriorityFoodCrops_2' => 'Maharage',
          'PriorityFoodCrops_3' => 'Ndizi',
          'LessPriorityCashCrops_1' => 'Mazao ya Bustani',
          'LessPriorityCashCrops_2' => 'Alizeti',
          'LessPriorityCashCrops_3' => NULL,
          'LessPriorityFoodCrops_1' => 'Mikunde',
          'LessPriorityFoodCrops_2' => NULL,
          'LessPriorityFoodCrops_3' => NULL,
          'created_at' => '2020-09-24 18:18:15',
          'updated_at' => '2020-09-24 18:18:15',
      ]);

      //2
      App\Place::create([
          'Region' => 'Arusha',
          'District' => 'Longido',
          'SoilPh' => '6.5-8.5',
          'SoilType' => 'Tifutifu, Kichanga na madini ya calcium, Mfinyanzi na rutuba ya kutosha',
          'PriorityCashCrops_1' => 'Kahawa',
          'PriorityCashCrops_2' => 'Vitunguu Saumu',
          'PriorityCashCrops_3' => NULL,
          'PriorityFoodCrops_1' => 'Mahindi',
          'PriorityFoodCrops_2' => 'Maharage',
          'PriorityFoodCrops_3' => 'Mtama',
          'LessPriorityCashCrops_1' => 'Vitungu Maji',
          'LessPriorityCashCrops_2' => 'Ngano',
          'LessPriorityCashCrops_3' => NULL,
          'LessPriorityFoodCrops_1' => 'Mikunde',
          'LessPriorityFoodCrops_2' => 'Viazi Vitamu',
          'LessPriorityFoodCrops_3' => NULL,
          'created_at' => '2020-09-24 18:18:15',
          'updated_at' => '2020-09-24 18:18:15',
      ]);

      //3
      App\Place::create([
          'Region' => 'Arusha',
          'District' => 'Monduli',
          'SoilPh' => '5-8.5',
          'SoilType' => 'Tifutifu, Kichanga na madini ya calcium, Mfinyanzi na rutuba ya kutosha',
          'PriorityCashCrops_1' => 'Kahawa',
          'PriorityCashCrops_2' => 'Vitunguu Saumu',
          'PriorityCashCrops_3' => 'Mazao ya Bustani',
          'PriorityFoodCrops_1' => 'Mahindi',
          'PriorityFoodCrops_2' => 'Mbaazi',
          'PriorityFoodCrops_3' => NULL,
          'LessPriorityCashCrops_1' => 'Vitungu Maji',
          'LessPriorityCashCrops_2' => NULL,
          'LessPriorityCashCrops_3' => NULL,
          'LessPriorityFoodCrops_1' => 'Vitungu maji',
          'LessPriorityFoodCrops_2' => 'Viazi Vitamu',
          'LessPriorityFoodCrops_3' => NULL,
          'created_at' => '2020-09-24 18:18:15',
          'updated_at' => '2020-09-24 18:18:15',
      ]);

      //4
      App\Place::create([
          'Region' => 'Arusha',
          'District' => 'Karatu',
          'SoilPh' => '4-8.5',
          'SoilType' => 'Tifutifu, Kichanga na madini ya calcium, Mfinyanzi na rutuba ya kutosha',
          'PriorityCashCrops_1' => 'Kahawa',
          'PriorityCashCrops_2' => 'Shahiri',
          'PriorityCashCrops_3' => 'Vitunguu Maji',
          'PriorityFoodCrops_1' => 'Mahindi',
          'PriorityFoodCrops_2' => 'Maharage',
          'PriorityFoodCrops_3' => NULL,
          'LessPriorityCashCrops_1' => 'Ngano',
          'LessPriorityCashCrops_2' => 'Mazao ya Bustani',
          'LessPriorityCashCrops_3' => NULL,
          'LessPriorityFoodCrops_1' => 'Mikunde',
          'LessPriorityFoodCrops_2' => NULL,
          'LessPriorityFoodCrops_3' => NULL,
          'created_at' => '2020-09-24 18:18:15',
          'updated_at' => '2020-09-24 18:18:15',
      ]);

      //5
      App\Place::create([
          'Region' => 'Arusha',
          'District' => 'Ngorongoro',
          'SoilPh' => '4-8.5',
          'SoilType' => 'Tifutifu, Kichanga na madini ya calcium, Mfinyanzi na rutuba ya kutosha',
          'PriorityCashCrops_1' => 'Mazao ya Bustani',
          'PriorityCashCrops_2' => NULL,
          'PriorityCashCrops_3' => NULL,
          'PriorityFoodCrops_1' => 'Mahindi',
          'PriorityFoodCrops_2' => 'Mtama',
          'PriorityFoodCrops_3' => NULL,
          'LessPriorityCashCrops_1' => 'Vitungu Saumu',
          'LessPriorityCashCrops_2' => NULL,
          'LessPriorityCashCrops_3' => NULL,
          'LessPriorityFoodCrops_1' => 'Viazi Vitamu',
          'LessPriorityFoodCrops_2' => NULL,
          'LessPriorityFoodCrops_3' => NULL,
          'created_at' => '2020-09-24 18:18:15',
          'updated_at' => '2020-09-24 18:18:15',
      ]);
    }
}
