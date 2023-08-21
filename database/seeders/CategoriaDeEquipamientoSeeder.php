<?php

namespace Database\Seeders;

use App\Models\CategoriaDeEquipamiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CategoriaDeEquipamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriasDeEquipamientos = collect(Http::get('https://www.dnd5eapi.co/api/equipment-categories/')->json());
        foreach ($categoriasDeEquipamientos->get('results') as $cde) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($cde)->get("url"))->json();
            $categoriaDeEquipamiento = new CategoriaDeEquipamiento();
            $categoriaDeEquipamiento->Nombre = $data["name"];
            $categoriaDeEquipamiento->save();
        };
    }
}
