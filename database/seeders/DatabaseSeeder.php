<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alineamiento;
use App\Models\CategoriaDeEquipamiento;
use App\Models\Condicion;
use App\Models\EscuelaMagica;
use App\Models\Habilidad;
use App\Models\PropiedadDeArma;
use App\Models\TipoDeDaño;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        /*
        $this->call(HabilidadSeeder::class);
            $this->call(SkillSeeder::class);
        $this->call(AlineamientoSeeder::class);
        $this->call(CondicionSeeder::class);
        $this->call(TipoDeDañoSeeder::class)
        $this->call(EscuelaMagicaSeeder::class);
        $this->call(PropiedadDeArmaSeeder::class);
        $this->call(CategoriaDeEquipamientoSeeder::class);

        $this->call(MonsterSeeder::class);
        $this->call(MonsterStatsSeeder::class);
        $this->call(ProficienciaSeeder::class);
        ;*/



        $this->call(HabilidadTableSeeder::class);
            $this->call(SkillTableSeeder::class);
        $this->call(AlineamientoTableSeeder::class);
        $this->call(TipoDeDañoTableSeeder::class);
        $this->call(CondicionTableSeeder::class);
        $this->call(EscuelaMagicaTableSeeder::class);
        $this->call(PropiedadDeArmaTableSeeder::class);
        $this->call(CategoriaDeEquipamientoTableSeeder::class);


        $this->call(MonsterTableSeeder::class);
        $this->call(MonsterstatsTableSeeder::class);
        $this->call(ProficienciaTableSeeder::class);








    }
}
