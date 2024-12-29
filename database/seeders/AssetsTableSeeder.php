<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('assets')->insert([
            
            
            'name' => 'Mouse',
            'status' =>'active',
            'name' => 'Keyboard',
            'status' =>'active',
            'name' => 'Monitor',
            'status' =>'active',
            'name' => 'Cpu',
            'status' =>'active',
            'name' => 'Water bottle',
            'status' =>'active',
            'name' => 'Tissue Paper',
            'status' =>'active',
            'name' => 'Table fan',
            'status' =>'active',
        ]);
    }
}
