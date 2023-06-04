<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CollaboratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('collaborators')->insert([
            [
                'name' => 'Andrea',
                'surname' => 'Salaris',
                'age' => 30,
                'description' => "'hp artisan serve', quanto irritante !",
                'portrait' => '/chiSiamo/andrea.jpeg',
            ],
            [
                'name' => 'Lucia',
                'surname' => 'Pacciolla',
                'age' => 29,
                'description' => 'Sono cresciuta a pane e ansia !',
                'portrait' => '/chiSiamo/lucia.jpeg',
            ],
            [
                'name' => 'Sara',
                'surname' => 'Pileio',
                'age' => 26,
                'description' => 'Sono una devasta noccioline !',
                'portrait' => '/chiSiamo/sara.jpeg',
            ],[
                'name' => 'Giulio',
                'surname' => 'Palese',
                'age' => 35,
                'description' => 'Solitario come i lupi !',
                'portrait' => '/chiSiamo/giulio.jpeg',
            ],
            [
                'name' => 'Antonio',
                'surname' => 'Russo',
                'age' => 31,
                'description' => 'Mi piace mangiare !',
                'portrait' => '/chiSiamo/antonio.jpeg',
            ],
            [
                'name' => 'Francesco',
                'surname' => 'Piccolo',
                'age' => 24,
                'description' => 'Una tastiera e sono in paradiso !',
                'portrait' => '/chiSiamo/francesco.jpeg',
            ],
        ]);
    }
    }
