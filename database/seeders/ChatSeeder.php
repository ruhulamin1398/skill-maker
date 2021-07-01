<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\seminar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chats')->insert([
            [
                'model'=>seminar::class,
                'model_id'=>1,
            ],
            [
                'model'=>seminar::class,
                'model_id'=>2,
            ],
            [
                'model'=>seminar::class,
                'model_id'=>3,
            ],

        ]);
    }
}
