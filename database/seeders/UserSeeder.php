<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //start
        DB::table('users')->insert([
            'name' => 'Larry M/ Mirador',
            'email' => 'larrymirador006@gmail.com',
            'password' => 'Larry006',
            'created_at' => Carbon::now()
        ]);
    }
}
