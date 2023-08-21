<?php

namespace Database\Seeders;

use App\Models\Monster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class MonstersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $monsters = collect(Http::get('https://www.dnd5eapi.co/api/monsters/')->json());
        foreach ($monsters->get('results') as $monster) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($monster)->get("url"))->json();
            $monstruo = new Monster();
            $monstruo->Nombre = $data["name"];
            $monstruo->Tamanio = $data["size"];
            $monstruo->Tipo = $data["type"];
            $monstruo->PuntoDeGolpe = $data["hit_points"];
            $monstruo->Alineamiento = $data["alignment"];;
            $monstruo->save();
        };

    }
}
