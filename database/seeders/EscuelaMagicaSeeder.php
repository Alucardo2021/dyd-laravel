<?php

namespace Database\Seeders;

use App\Models\EscuelaMagica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class EscuelaMagicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $escuelasMagicas = collect(Http::get('https://www.dnd5eapi.co/api/magic-schools/')->json());
        foreach ($escuelasMagicas->get('results') as $em) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($em)->get("url"))->json();
            $escuelaMagica = new EscuelaMagica();
            $escuelaMagica->Nombre = $data["name"];
            $escuelaMagica->Descripcion = $data["desc"];
            $escuelaMagica->save();
        };
    }
}
