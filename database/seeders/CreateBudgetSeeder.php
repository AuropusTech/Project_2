<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\BudgetType;



class CreateBudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $budgetType = [

            [
                'budgetType'=>'เงินรายได้',
            ],

            [
                'budgetType'=>'เงินอุดหนุน',
            ]

        ];

  
        foreach ($budgetType as $key => $value) {
            BudgetType::create($value);
        }
        
    }
}