<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ_answers;

class DefaultFAQ_answers1 extends Seeder
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
                            'answer' => 'Q1: What is SYFMs about?',
                        ]);
    }
}
