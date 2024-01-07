<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ_answers;

class DefaultFAQ_answers7 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                        
                            $FAQ_answers = FAQ_answers::create([
                                'FAQ_id' => 3,
                                'answer' => 'Q1: How do I reach customer support?',
                            ]);
    }
}
