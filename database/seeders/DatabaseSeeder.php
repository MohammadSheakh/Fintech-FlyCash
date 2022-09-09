<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call( [
            AdminsTableSeeder::class,
            AgentsTableSeeder::class,
            AgentstransactionsTableSeeder::class,
            CustomersTableSeeder::class,
            CustomerstransactionsTableSeeder::class,
            LoginusersTableSeeder::class,
            OfficersTableSeeder::class,
        ] );
    }
}
