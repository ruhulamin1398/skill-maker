<?php

namespace Database\Seeders;
use App\Models\freelancer;
use Illuminate\Database\Seeder;

class FreelancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        freelancer::create([
            'name' => 'jon',
            'location' => 'dhaka',
            'language' => 'bangla,english',
            'skills'   => 'php,laravel',
            'image'    => 'image.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.'
        ]);

        freelancer::create([
            'name' => 'jon2',
            'location' => 'dhaka',
            'language' => 'bangla,english',
            'skills'   => 'php,laravel',
            'image'    => 'image.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.'
        ]);
    }

}
