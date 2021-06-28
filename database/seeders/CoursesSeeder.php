<?php

namespace Database\Seeders;

use App\Models\course;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        course::create([
            'course_title'       => 'Digital Marketing',
            'image'              => 'image.jpg',
            'introduction_video' => 'video.mp4',
            'description'        => 'this is test description',
            'price'              => '1200',
        ],[
            'course_title'       => 'Web Dvelopment',
            'image'              => 'image.jpg',
            'introduction_video' => 'video.mp4',
            'description'        => 'this is test description',
            'price'              => '1200',
        ]);
    }
}
