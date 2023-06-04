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
                'description' => "'hp artisan serve', quanto irritante!"
            ],
            [
                'name' => 'Lucia',
                'surname' => 'Pacciolla',
                'age' => 26,
                'description' => 'Una breve descrizione di Lucia'
            ],
            [
                'name' => 'Sara',
                'surname' => 'Pileio',
                'age' => 30,
                'description' => 'Una breve descrizione di Sara'
            ],[
                'name' => 'Giulio',
                'surname' => 'Palese',
                'age' => 37,
                'description' => 'Una breve descrizione di Giulio'
            ],
            [
                'name' => 'Antonio',
                'surname' => 'Russo',
                'age' => 30,
                'description' => 'Una breve descrizione di Antonio'
            ],
            [
                'name' => 'Francesco',
                'surname' => 'Piccolo',
                'age' => 24,
                'description' => 'Una breve descrizione di Francesco'
            ],
        ]);
    }
    }
