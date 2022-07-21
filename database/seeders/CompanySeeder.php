<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();
        $companies  = [];
        $faker = Faker::create();

        foreach (range(1,10) as  $index)
        {
            $companies[] = [
                'name'=>$faker->company,
                'email'=>$faker->email,
                'adresse'=>$faker->address,
                'website'=>$faker->domainName,
                'created_at'=>now(),
                'updated_at'=>now(),
                ];
        }
        DB::table('companies')->insert($companies);
    }
}
