<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ_answers;

class DefaultFAQ_answers4 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
                $FAQ_answers = FAQ_answers::create([
                    'FAQ_id' => 2,
                    'answer' => 'A1: In the navbar you may see a dropdown called "Account" click on it and then click on "Register".',
                ]);
    }
}
