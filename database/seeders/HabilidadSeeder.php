<?php

namespace Database\Seeders;

use App\Models\Habilidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class HabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $habilidades = collect(Http::get('https://www.dnd5eapi.co/api/ability-scores/')->json());
        foreach ($habilidades->get('results') as $hab) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($hab)->get("url"))->json();
            $habilidad = new Habilidad();
            $habilidad->Nombre = $data["full_name"];
            $habilidad->Abreviatura = $data["name"];
            $habilidad->Descripcion = "";
            foreach ($data["desc"] as $dato) {
                $habilidad->Descripcion = $habilidad->Descripcion.$dato;
            }
            $habilidad->save();
        };
    }
}
