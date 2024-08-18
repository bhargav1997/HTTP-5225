<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory()->create([
            'courseID' => 'HTTP3001',
            'name'=> 'PHP',
            'description' => 'Introduction to PHP',
            ]);

        Course::factory()->create([
                'courseID' => 'HTTP3002',
                'name'=> 'React',
                'description' => 'Introduction to React',
                ]);

        Course::factory()->create([
            'courseID' => 'HTTP3003',
            'name'=> 'NodeJs',
            'description' => 'Introduction to NodeJs',
            ]);
    }
}
