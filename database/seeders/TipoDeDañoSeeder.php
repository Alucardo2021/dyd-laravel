<?php

namespace Database\Seeders;

use App\Models\TipoDeDaño;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class TipoDeDañoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposDeDaño = collect(Http::get('https://www.dnd5eapi.co/api/damage-types/')->json());
        foreach ($tiposDeDaño->get('results') as $tdd) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($tdd)->get("url"))->json();
            $tipoDeDaño = new TipoDeDaño();
            $tipoDeDaño->Nombre = $data["name"];
            $tipoDeDaño->Descripcion = "";
            foreach ($data["desc"] as $dato) {
                $tipoDeDaño->Descripcion = $tipoDeDaño->Descripcion.$dato;
            }

            $tipoDeDaño->save();
        };
    }
}
