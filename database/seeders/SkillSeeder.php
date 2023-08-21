<?php

namespace Database\Seeders;

use App\Models\Habilidad;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = collect(Http::get('https://www.dnd5eapi.co/api/skills/')->json());
        foreach ($skills->get('results') as $s) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($s)->get("url"))->json();
            $skill = new Skill();
            $skill->Nombre = $data["name"];
            $skill->Descripcion = "";
            $skill->HabilidadID = Habilidad::where('Abreviatura',collect($data["ability_score"])->get("name"))->first()->HabilidadID;
            foreach ($data["desc"] as $dato) {
                $skill->Descripcion = $skill->Descripcion.$dato;
            }

            $skill->save();
        };
    }
}
