
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionPackagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('subscription_packages')->insert([
            ['name' => 'Pay-as-you-go', 'price' => 0.00, 'duration' => 'payg'],
            ['name' => 'Monthly', 'price' => 29.99, 'duration' => 'monthly'],
            ['name' => 'Quarterly', 'price' => 79.99, 'duration' => 'quarterly'],
            ['name' => 'Biannually', 'price' => 149.99, 'duration' => 'biannually'],
            ['name' => 'Annually', 'price' => 299.99, 'duration' => 'annually'],
        ]);
    }
}
