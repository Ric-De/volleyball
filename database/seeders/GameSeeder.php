<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game = new Game();

        $game->date = '2024-01-29';
        $game->time = '16:00';
        $game->yellow_team_id = '1';
        $game->blue_team_id = '2';
        $game->yellow_score = '2';
        $game->blue_score = '0';

        $game->save();

        $game1 = new Game();

        $game1->date = '2024-01-29';
        $game1->time = '18:00';
        $game1->yellow_team_id = '3';
        $game1->blue_team_id = '4';
        $game1->yellow_score = '1';
        $game1->blue_score = '2';

        $game1->save();

        $game2 = new Game();

        $game2->date = '2024-01-30';
        $game2->time = '10:00';
        $game2->yellow_team_id = '5';
        $game2->blue_team_id = '6';
        $game2->yellow_score = '0';
        $game2->blue_score = '2';

        $game2->save();
    }
}
