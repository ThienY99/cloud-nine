<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@ehb.be',
            'password' => bcrypt('Password!321'),
            'is_admin' => true,
        ]);

        $drinks = Category::create(['name' => 'Drinks']);
        $food = Category::create(['name' => 'Food']);
    
        Faq::create([
        'category_id' => $drinks->id,
        'question'    => 'What coffee drinks do you offer?',
        'answer'      => 'We offer coconut coffee, egg coffee and cà phê sữa đá.',
        ]);

        Faq::create([
        'category_id' => $food->id,
        'question'    => 'Is all the meat you serve Halal',
        'answer'      => 'Yes! All meat we serve is sourced exclusively from suppliers that follow strict Halal guidelines. This ensures animals are ethically treated and properly slaughtered in accordance with Islamic law.',
        ]);


        // User::factory(10)->create();
        User::factory(10)->create();
        Article::factory(20)->create();
   
    }
}
