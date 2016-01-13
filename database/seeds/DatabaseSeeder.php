<?php

use Illuminate\Database\Seeder;
use TrezeVel\Category\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        
        $this->call(Category::class, 5)->create();
    }
}
