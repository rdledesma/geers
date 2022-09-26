<?php

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
        $this->call(ArticleSeeder::class);
        $this->call(IntegrantSeeder::class);
        $this->call(ResourceSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}
