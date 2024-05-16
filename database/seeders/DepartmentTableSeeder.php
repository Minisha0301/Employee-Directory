<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments =[
            'Software Development',
            'Network Engineering',
            'Database Administration',
            'Cybersecurity',
            'IT Support',
            'Web Development'
        ];

        for($i=0;$i<count($departments);$i++){
            DB::table('departments')->insert([
                'name'=> $departments[$i]
            ]);
        }
      
        
    }
}
