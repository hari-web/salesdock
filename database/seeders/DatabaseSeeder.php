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
        //seed initial values
        $this->call(ProductTable::class);
        $this->call(RulesTable::class);
        $this->call(ProductRules::class);
    }
}
