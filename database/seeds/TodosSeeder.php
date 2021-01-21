<?php

use Illuminate\Database\Seeder;

// Generate a Seed class
class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Call the 'factory' function created in TodoFactory.php and create 10 instances
        factory(App\Todo::class, 5)->create();
    }
}
