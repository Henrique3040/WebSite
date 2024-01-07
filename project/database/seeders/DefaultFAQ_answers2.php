<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ_answers;

class DefaultFAQ_answers2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
                $FAQ_answers = FAQ_answers::create([
                    'FAQ_id' => 1,
                    'answer' => 'A1:That is a website meant for users to save they favoriete photos in one place.',
                ]);
    }
}
