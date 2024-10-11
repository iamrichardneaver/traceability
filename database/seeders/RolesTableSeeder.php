
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'Admin'],
            ['name' => 'Farmer'],
            ['name' => 'Agronomist'],
            ['name' => 'Supplier'],
            ['name' => 'Retailer'],
            ['name' => 'Consumer'],
        ]);
    }
}
