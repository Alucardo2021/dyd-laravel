<?php

namespace Database\Seeders;

use App\Models\Monster;
use App\Models\MonsterStats;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class MonsterStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $monsters = collect(Http::get('https://www.dnd5eapi.co/api/monsters/')->json());

        foreach ($monsters->get('results') as $monster) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($monster)->get("url"))->json();

            $mstats = new MonsterStats();
            $mstats->MonsterID = Monster::where('Nombre', $data["name"])->first()->MonsterID;
            $mstats->STR = $data["strength"];
            $mstats->DEX = $data["dexterity"];
            $mstats->CON = $data["constitution"];
            $mstats->INT = $data["intelligence"];
            $mstats->WIS = $data["wisdom"];
            $mstats->CHA = $data["charisma"];
            $mstats->save();
        };


    }
}
