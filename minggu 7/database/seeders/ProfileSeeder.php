<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile')->insert([
            'address' => 'jember',
            'no_tlp' => '085156920462',
            'ttl' => '2000-09-28',
            'foto' => 'pictures.png'
        ]);
    }
}
