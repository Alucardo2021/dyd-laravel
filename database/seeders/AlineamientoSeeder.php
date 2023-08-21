<?php

namespace Database\Seeders;

use App\Models\Alineamiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class AlineamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alineamientos = collect(Http::get('https://www.dnd5eapi.co/api/alignments/')->json());
        foreach ($alineamientos->get('results') as $aline) {
            $data = Http::get('https://www.dnd5eapi.co'.collect($aline)->get("url"))->json();
            $alineamiento = new Alineamiento();
            $alineamiento->Nombre = $data["name"];
            $alineamiento->Abreviatura = $data["abbreviation"];
            $alineamiento->Descripcion = $data["desc"];
            $alineamiento->save();
        };
    }
}
