<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class trainer_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100000 ; $i++) { 
        DB::table('trainer')->insert([
            // 'Company_id' => 1,
            'Trainer__name' => "Trainer__name",
            'Trainer_email' => "Trainer_email",
            'Trainer_phone'=> "Trainer_phone",
            'Company_id' => 1
        ]);}
    }
}
