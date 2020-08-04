<?php

use Illuminate\Database\Seeder;
use App\Tache;

class TachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taches = [
            [
                'titre' => 'Commander matériel', 
                'description' => 'Firewall Forcepoint',
                'user_id' => 3,
                'project_id' => 1,
                'etat' => 'TERMINE',
                'tache_id' => null,
                'started_at' => '2020-07-10 10:00',
                'finished_at' => '2020-07-12 10:00',
            ],
            [
                'titre' => 'Installer FW', 
                'description' => 'Placer le nouveau Firewall dans le cluster',
                'user_id' => 4,
                'project_id' => 1,
                'etat' => 'TERMINE',
                'tache_id' => 1,
                'started_at' => '2020-07-12 10:00',
                'finished_at' => '2020-07-12 13:00',
            ],
            [
                'titre' => 'Configurer FW', 
                'description' => 'Importer les configurations dans le nouveau FW',
                'user_id' => 4,
                'project_id' => 1,
                'etat' => 'TERMINE',
                'tache_id' => 2,
                'started_at' => '2020-07-12 13:00',
                'finished_at' => '2020-07-13 13:00',
            ],
            [
                'titre' => 'Etablir policies', 
                'description' => 'Mettre en place des policies respectant les nouveles exigences',
                'user_id' => 5,
                'project_id' => 1,
                'etat' => 'TERMINE',
                'tache_id' => null,
                'started_at' => '2020-07-12 12:00',
                'finished_at' => '2020-07-14 13:00',
            ],
            [
                'titre' => 'Intégrer configurations', 
                'description' => 'Intégrer les nouvelles configurations aux anciennes',
                'user_id' => 4,
                'project_id' => 1,
                'etat' => 'TERMINE',
                'tache_id' => 3,
                'started_at' => '2020-07-14 14:00',
                'finished_at' => '2020-07-16 13:00',
            ],
            [
                'titre' => 'Tester', 
                'description' => 'Tester le nouvel environnement',
                'user_id' => 6,
                'project_id' => 1,
                'etat' => 'TERMINE',
                'tache_id' => 4,
                'started_at' => '2020-07-16 15:00',
                'finished_at' => '2020-07-21 12:00',
            ],
            [
                'titre' => 'Rapport', 
                'description' => 'Transmettre le rapport au manager et au chef de projet',
                'user_id' => 6,
                'project_id' => 1,
                'etat' => 'TERMINE',
                'tache_id' => 5,
                'started_at' => '2020-07-21 12:00',
                'finished_at' => '2020-07-21 13:00',
            ],
        ];
        
        foreach ($taches as $tache) {     
            DB::table('taches')->insert([
                'titre' => $tache['titre'],
                'description' => $tache['description'],
                'user_id' => $tache['user_id'],
                'project_id' => $tache['project_id'],
                'etat' => $tache['etat'],
                'tache_id' => $tache['tache_id'],
                'started_at' => $tache['started_at'],
                'finished_at' => $tache['finished_at'],
                ]);
        }
    }
}
