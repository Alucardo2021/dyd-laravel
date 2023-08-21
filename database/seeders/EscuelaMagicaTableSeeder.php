<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscuelaMagicaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('EscuelaMagica')->delete();

        DB::table('EscuelaMagica')->insert(array (
            0 =>
            array (
                'EscuelaMagicaID' => 1,
                'Nombre' => 'Abjuration',
                'Descripcion' => 'Abjuration spells are protective in nature, though some of them have aggressive uses. They create magical barriers, negate harmful effects, harm trespassers, or banish creatures to other planes of existence.',
                'created_at' => '2023-08-19 21:14:52',
                'updated_at' => '2023-08-19 21:14:52',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'EscuelaMagicaID' => 2,
                'Nombre' => 'Conjuration',
                'Descripcion' => 'Conjuration spells involve the transportation of objects and creatures from one location to another. Some spells summon creatures or objects to the caster\'s side, whereas others allow the caster to teleport to another location. Some conjurations create objects or effects out of nothing.',
                'created_at' => '2023-08-19 21:14:54',
                'updated_at' => '2023-08-19 21:14:54',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'EscuelaMagicaID' => 3,
                'Nombre' => 'Divination',
                'Descripcion' => 'Divination spells reveal information, whether in the form of secrets long forgotten, glimpses of the future, the locations of hidden things, the truth behind illusions, or visions of distant people or places.',
                'created_at' => '2023-08-19 21:14:55',
                'updated_at' => '2023-08-19 21:14:55',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'EscuelaMagicaID' => 4,
                'Nombre' => 'Enchantment',
                'Descripcion' => 'Enchantment spells affect the minds of others, influencing or controlling their behavior. Such spells can make enemies see the caster as a friend, force creatures to take a course of action, or even control another creature like a puppet.',
                'created_at' => '2023-08-19 21:14:56',
                'updated_at' => '2023-08-19 21:14:56',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'EscuelaMagicaID' => 5,
                'Nombre' => 'Evocation',
                'Descripcion' => 'Evocation spells manipulate magical energy to produce a desired effect. Some call up blasts of fire or lightning. Others channel positive energy to heal wounds.',
                'created_at' => '2023-08-19 21:14:57',
                'updated_at' => '2023-08-19 21:14:57',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'EscuelaMagicaID' => 6,
                'Nombre' => 'Illusion',
                'Descripcion' => 'Illusion spells deceive the senses or minds of others. They cause people to see things that are not there, to miss things that are there, to hear phantom noises, or to remember things that never happened. Some illusions create phantom images that any creature can see, but the most insidious illusions plant an image directly in the mind of a creature.',
                'created_at' => '2023-08-19 21:14:59',
                'updated_at' => '2023-08-19 21:14:59',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'EscuelaMagicaID' => 7,
                'Nombre' => 'Necromancy',
                'Descripcion' => 'Necromancy spells manipulate the energies of life and death. Such spells can grant an extra reserve of life force, drain the life energy from another creature, create the undead, or even bring the dead back to life.',
                'created_at' => '2023-08-19 21:15:00',
                'updated_at' => '2023-08-19 21:15:00',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'EscuelaMagicaID' => 8,
                'Nombre' => 'Transmutation',
                'Descripcion' => 'Transmutation spells change the properties of a creature, object, or environment. They might turn an enemy into a harmless creature, bolster the strength of an ally, make an object move at the caster\'s command, or enhance a creature\'s innate healing abilities to rapidly recover from injury.',
                'created_at' => '2023-08-19 21:15:01',
                'updated_at' => '2023-08-19 21:15:01',
                'deleted_at' => NULL,
            ),
        ));


    }
}
