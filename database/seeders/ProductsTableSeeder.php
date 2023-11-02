<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => 249999,
            'description' => 'Boosté par la puce M2 Pro ou M2 Max, le MacBook Pro offre une puissance et une efficacité énergétique inédites.',
        ]);

        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'Laptop-2',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Ses performances sont exceptionnelles, qu’il soit branché ou non. ',
        ]);

        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'Laptop-3',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Ses performances sont exceptionnelles, qu’il soit branché ou non. ',
        ]);

        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'Laptop-4',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Ses performances sont exceptionnelles, qu’il soit branché ou non. ',
        ]);

        Product::create([
            'name' => 'Laptop 5',
            'slug' => 'Laptop-5',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Ses performances sont exceptionnelles, qu’il soit branché ou non. ',
        ]);

        Product::create([
            'name' => 'Laptop 6',
            'slug' => 'Laptop-6',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Ses performances sont exceptionnelles, qu’il soit branché ou non. ',
        ]);

        Product::create([
            'name' => 'Laptop 7',
            'slug' => 'Laptop-7',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Ses performances sont exceptionnelles, qu’il soit branché ou non. ',
        ]);

        Product::create([
            'name' => 'Laptop 8',
            'slug' => 'Laptop-8',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Ses performances sont exceptionnelles, qu’il soit branché ou non. ',
        ]);

        Product::create([
            'name' => 'Laptop 9',
            'slug' => 'Laptop-9',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Ses performances sont exceptionnelles, qu’il soit branché ou non. ',
        ]);
    }
}
