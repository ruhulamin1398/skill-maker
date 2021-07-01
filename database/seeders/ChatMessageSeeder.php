<?php

namespace Database\Seeders;

use App\Models\chatMessage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        chatMessage::factory()->count(500)->create();
    }
}
