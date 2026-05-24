<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Product;
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

         Product::create([
        'category_id' => $drinks->id,
        'name'        => 'Coconut Coffee',
        'description' => 'Vietnamese coffee with fresh coconut milk.',
        'price'       => 5.50,
        ]);

        Product::create([
            'category_id' => $drinks->id,
            'name'        => 'Egg Coffee',
            'description' => 'Traditional Hanoi egg coffee, rich and creamy.',
            'price'       => 4.00,
        ]);
        Product::create([
            'category_id' => $drinks->id,
            'name'        => 'Cà Phê Sữa Đá',
            'description' => 'Classic Vietnamese iced milk coffee.',
            'price'       => 5.50,
        ]);
        Product::create([
            'category_id' => $food->id,
            'name'        => 'Matcha Cake',
            'description' => 'Light Asian matcha sponge cake.',
            'price'       => 5.00,
        ]);
        Product::create([
            'category_id' => $food->id,
            'name'        => 'Classic Banh Mi',
            'description' => 'Vietnamese baguette with halal pâté, veggies and herbs.',
            'price'       => 9.50,
        ]);        

        // User::factory(10)->create();
        User::factory(10)->create();
        Article::factory(20)->create();
        Category::factory(4)->create();
   
    }
}
