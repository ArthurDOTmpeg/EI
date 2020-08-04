<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'nom' => 'Installer nouveau FW',
                'description' => 'Installer le nouveau FW et migrer les anciennes configurations',
            ],
        ];
        foreach ($projects as $project) {     
            DB::table('projects')->insert([
                'nom' => $project['nom'],
                'description' => $project['description'],
                ]);
        }
    }
}
