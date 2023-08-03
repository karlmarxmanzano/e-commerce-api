<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('sub_categories')->count() == 0) {
            DB::table('sub_categories')->insert([
                [
                    'category_id' => Category::whereName('Women')->first()->id,
                    'name' => 'Shirts & Tees',
                    'slug' => 'shirt-tees',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor alias amet cum, obcaecati delectus dolorem! Nobis repellat explicabo beatae tenetur iste',
                    'is_visible' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => Category::whereName('Women')->first()->id,
                    'name' => 'Blouses',
                    'slug' => 'blouses',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor alias amet cum, obcaecati delectus dolorem! Nobis repellat explicabo beatae tenetur iste',
                    'is_visible' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => Category::whereName('Men')->first()->id,
                    'name' => 'Tanks & Sandos',
                    'slug' => 'tanks-sandos',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor alias amet cum, obcaecati delectus dolorem! Nobis repellat explicabo beatae tenetur iste',
                    'is_visible' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => Category::whereName('Men')->first()->id,
                    'name' => 'Polo Shirts',
                    'slug' => 'polo-shirts',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor alias amet cum, obcaecati delectus dolorem! Nobis repellat explicabo beatae tenetur iste',
                    'is_visible' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        } else {
            $this->command->info('Seeding cancelled. Table is not empty.');
        }
    }
}
