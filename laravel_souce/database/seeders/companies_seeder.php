<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class companies_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100000 ; $i++) { 
            
        
            DB::table('companies')->insert([
                // 'Company_id' => 1,
                'Company_name' => "Company_name",
                'Company_web' => "Company_name",
                'Company_address'=> "Company_address",
                'Company_code' => "Company_name",
                'Company_phone' => "Company_name"
            ]);
            }
    }
}
