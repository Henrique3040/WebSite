<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ_answers; 

class DefaultFAQ_answers8 extends Seeder
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
                                'answer' => 'A1: In the navbar you will find a contact link, click on it and you will be redirected to a page where you can fill in a form to contact us.',
                            ]); 
    }
}
