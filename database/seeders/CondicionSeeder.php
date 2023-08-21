<?php

namespace Database\Seeders;

use App\Models\Condicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CondicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $condiciones = collect(Http::get('https://www.dnd5eapi.co/api/conditions/')->json());
        foreach ($condiciones->get('results') as $cond) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($cond)->get("url"))->json();
            $condicion = new Condicion();
            $condicion->Nombre = $data["name"];
            $condicion->Descripcion = "";
            foreach ($data["desc"] as $dato) {
                $condicion->Descripcion = $condicion->Descripcion.$dato;
            }

            $condicion->save();
        };
    }
}
