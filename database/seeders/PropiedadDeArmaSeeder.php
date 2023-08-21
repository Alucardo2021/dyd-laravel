<?php

namespace Database\Seeders;

use App\Models\PropiedadDeArma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class PropiedadDeArmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $propiedadesDeArmas = collect(Http::get('https://www.dnd5eapi.co/api/weapon-properties/')->json());
        foreach ($propiedadesDeArmas->get('results') as $pda) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($pda)->get("url"))->json();
            $propiedadDeArma = new PropiedadDeArma();
            $propiedadDeArma->Nombre = $data["name"];
            $propiedadDeArma->Descripcion = "";
            foreach ($data["desc"] as $dato) {
                $propiedadDeArma->Descripcion = $propiedadDeArma->Descripcion.$dato;
            }

            $propiedadDeArma->save();
        };
    }

}
