<?php

namespace Database\Seeders;

use App\Models\Proficiencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProficienciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $proficiencias = collect(Http::get('https://www.dnd5eapi.co/api/proficiencies/')->json());
        foreach ($proficiencias->get('results') as $prof) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($prof)->get("url"))->json();
            $proficiencia = new Proficiencia();
            $proficiencia->Nombre = $data["name"];
            $proficiencia->Tipo = $data["type"];
            $proficiencia->save();
        };

    }
}
