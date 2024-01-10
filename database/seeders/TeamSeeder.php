<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team = new Team();

        $team->name = 'Bizonhos';
        $team->players_names = 'Joao e Pedro';
        $team->city = 'Barcelona';
        $team->district = 'Barrio de Gracia';

        $team->save();

        $team1 = new Team();

        $team1->name = 'Raros';
        $team1->players_names = 'Marcio e Smurfete';
        $team1->city = 'Murcia';
        $team1->district = 'Barrio de Bosta';

        $team1->save();

        $team2 = new Team();

        $team2->name = 'Estranhos';
        $team2->players_names = 'Pepe e Pipo';
        $team2->city = 'Valencia';
        $team2->district = 'Barrio de Vala';

        $team2->save();

        $team3 = new Team();

        $team3->name = 'Peleadores';
        $team3->players_names = 'Juvenal e Jonas';
        $team3->city = 'Madrid';
        $team3->district = 'Barrio de Centro';

        $team3->save();

        $team4 = new Team();

        $team4->name = 'Fracos';
        $team4->players_names = 'Joselito e Sem Nocao';
        $team4->city = 'Girona';
        $team4->district = 'Barrio dos sin Esperanca';

        $team4->save();

        $team5 = new Team();

        $team5->name = 'Fuertes';
        $team5->players_names = 'Oriol e Sancho';
        $team5->city = 'Vasquez';
        $team5->district = 'Barrio de Cornudos';

        $team5->save();
    }
}
