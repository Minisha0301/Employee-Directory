<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = [
            'Software Engineer',
            'Network Administrator',
            'Database Developer',
            'Cybersecurity Analyst',
            'IT Technician',
            'Web Developer'
        ];

        for($i=0;$i<count($designations);$i++){
            DB::table('designations')->insert([
                'name'=> $designations[$i]
            ]);
        }
    }
}
