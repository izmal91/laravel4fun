<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staff')->insert([
            'name' => 'admin',
            'email' => 'adming@gmail.com',
            'mobile_no' => '000',
            'user_type' => 'admin',
            'created_from' => 'seeder',
            'created_date' => date('Y-m-d H:i:s'),
            'updated_date' => date('Y-m-d H:i:s')
        ]);

        $faker_creator = Factory::create();

        for($i = 0; $i < 10; $i++)
        {
            DB::table('staff')->insert([
                'name' => $faker_creator->name,
                'email' => $faker_creator->email,
                'mobile_no' => $faker_creator->phoneNumber,
                'user_type' => 'user',
                'created_from' => 'seeder',
                'created_date' => date('Y-m-d H:i:s'),
                'updated_date' => date('Y-m-d H:i:s')
            ]);
        }
        
    }
}
