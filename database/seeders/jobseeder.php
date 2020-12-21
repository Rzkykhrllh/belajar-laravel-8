<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;
use Illuminate\Support\Str;

class jobseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table("job")->insert(
            [
                "role"=>Str::random(10),
                "company"=>Str::random(12),
                "salary"=>rand(1000,9999)
            ]
            );
    }
}
