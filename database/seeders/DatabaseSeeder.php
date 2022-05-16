<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            CreateFactSeeder::class,//
            CreateDeptSeeder::class,//
            CreateUsersSeeder::class,

            HeadmanSeeder::class,//
            PositionSeeder::class,//
            StatusSeeder::class,//

            CreateBudgetSeeder::class,//
            CreatePlanBudgetSeeder::class,//
            CreatePlanSeeder::class,//
            CreateSubPlanSeeder::class,//
            CreateProjectSeeder::class,//
            
        ]);
        
    }
}

