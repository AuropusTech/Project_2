<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Fact;


class CreateFactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fact = [
            [
                'factName'=>'คณะวิทยาศาสตร์',
            ],
        ];

        foreach ($fact as $key => $value) {
            Fact::create($value);
        }
    }
}
