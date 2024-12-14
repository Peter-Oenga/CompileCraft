<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('collections')->insert([
            'name' => 'Sample Collection',
            'description' => 'This is a sample collection.',
            // Add any other columns here
            'user_id' => 1,
        ]);
    }
}


