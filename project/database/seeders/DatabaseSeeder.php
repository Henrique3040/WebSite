<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DefaultUserSeeder::class,
            DefaultFAQ::class,   
            DefaultFAQ2::class,
            DefaultFAQ3::class,
            DefaultFAQ_answers1::class,
            DefaultFAQ_answers2::class,
            DefaultFAQ_answers3::class,
            DefaultFAQ_answers4::class,
            DefaultFAQ_answers5::class,
            DefaultFAQ_answers6::class,
            DefaultFAQ_answers7::class,
            DefaultFAQ_answers8::class,
        ]);
    }
}
