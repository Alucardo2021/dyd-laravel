<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoDeDañoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('TipoDeDaño')->delete();
        
        \DB::table('TipoDeDaño')->insert(array (
            0 => 
            array (
                'TipoDeDañoID' => 1,
                'Nombre' => 'Acid',
                'Descripcion' => 'The corrosive spray of a black dragon\'s breath and the dissolving enzymes secreted by a black pudding deal acid damage.',
                'created_at' => '2023-08-19 20:37:19',
                'updated_at' => '2023-08-19 20:37:19',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'TipoDeDañoID' => 2,
                'Nombre' => 'Bludgeoning',
                'Descripcion' => 'Blunt force attacks, falling, constriction, and the like deal bludgeoning damage.',
                'created_at' => '2023-08-19 20:37:20',
                'updated_at' => '2023-08-19 20:37:20',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'TipoDeDañoID' => 3,
                'Nombre' => 'Cold',
                'Descripcion' => 'The infernal chill radiating from an ice devil\'s spear and the frigid blast of a white dragon\'s breath deal cold damage.',
                'created_at' => '2023-08-19 20:37:21',
                'updated_at' => '2023-08-19 20:37:21',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'TipoDeDañoID' => 4,
                'Nombre' => 'Fire',
                'Descripcion' => 'Red dragons breathe fire, and many spells conjure flames to deal fire damage.',
                'created_at' => '2023-08-19 20:37:22',
                'updated_at' => '2023-08-19 20:37:22',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'TipoDeDañoID' => 5,
                'Nombre' => 'Force',
                'Descripcion' => 'Force is pure magical energy focused into a damaging form. Most effects that deal force damage are spells, including magic missile and spiritual weapon.',
                'created_at' => '2023-08-19 20:37:23',
                'updated_at' => '2023-08-19 20:37:23',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'TipoDeDañoID' => 6,
                'Nombre' => 'Lightning',
                'Descripcion' => 'A lightning bolt spell and a blue dragon\'s breath deal lightning damage.',
                'created_at' => '2023-08-19 20:37:25',
                'updated_at' => '2023-08-19 20:37:25',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'TipoDeDañoID' => 7,
                'Nombre' => 'Necrotic',
                'Descripcion' => 'Necrotic damage, dealt by certain undead and a spell such as chill touch, withers matter and even the soul.',
                'created_at' => '2023-08-19 20:37:26',
                'updated_at' => '2023-08-19 20:37:26',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'TipoDeDañoID' => 8,
                'Nombre' => 'Piercing',
                'Descripcion' => 'Puncturing and impaling attacks, including spears and monsters\' bites, deal piercing damage.',
                'created_at' => '2023-08-19 20:37:27',
                'updated_at' => '2023-08-19 20:37:27',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'TipoDeDañoID' => 9,
                'Nombre' => 'Poison',
                'Descripcion' => 'Venomous stings and the toxic gas of a green dragon\'s breath deal poison damage.',
                'created_at' => '2023-08-19 20:37:28',
                'updated_at' => '2023-08-19 20:37:28',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'TipoDeDañoID' => 10,
                'Nombre' => 'Psychic',
                'Descripcion' => 'Mental abilities such as a psionic blast deal psychic damage.',
                'created_at' => '2023-08-19 20:37:29',
                'updated_at' => '2023-08-19 20:37:29',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'TipoDeDañoID' => 11,
                'Nombre' => 'Radiant',
                'Descripcion' => 'Radiant damage, dealt by a cleric\'s flame strike spell or an angel\'s smiting weapon, sears the flesh like fire and overloads the spirit with power.',
                'created_at' => '2023-08-19 20:37:30',
                'updated_at' => '2023-08-19 20:37:30',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'TipoDeDañoID' => 12,
                'Nombre' => 'Slashing',
                'Descripcion' => 'Swords, axes, and monsters\' claws deal slashing damage.',
                'created_at' => '2023-08-19 20:37:31',
                'updated_at' => '2023-08-19 20:37:31',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'TipoDeDañoID' => 13,
                'Nombre' => 'Thunder',
                'Descripcion' => 'A concussive burst of sound, such as the effect of the thunderwave spell, deals thunder damage.',
                'created_at' => '2023-08-19 20:37:32',
                'updated_at' => '2023-08-19 20:37:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}