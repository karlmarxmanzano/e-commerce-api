<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('categories')->count() == 0) {
            DB::table('categories')->insert([
                [
                    'name' => 'Women',
                    'slug' => 'women',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor alias amet cum, obcaecati delectus dolorem! Nobis repellat explicabo beatae tenetur iste',
                    'is_visible' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Men',
                    'slug' => 'men',
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
