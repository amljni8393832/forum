<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;


class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'iEval',
            'description' => 'Plateforme d\'évaluation en ligne',
            'start' => now(),
            'end' => now(),
            'user_id' => 1
        ]);

        Project::create([
            'title' => 'HabitFlow',
            'description' => 'Application mobile pour développement de consolidation',
            'start' => now(),
            'end' => now(),
            'user_id' => 2
        ]);

        Project::create([
            'title' => 'Ikoy',
            'description' => 'Application mobile pour développement personnel basée sur une base de données',
            'start' => now(),
            'end' => now(),
            'user_id' => 3
        ]);

        Project::create([
            'title' => 'doIt',
            'description' => 'Application web pour la gestion des tâches',
            'start' => now(),
            'end' => now(),
            'user_id' => 4
        ]);
    }
}
