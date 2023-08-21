<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabilidadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('Habilidad')->delete();

        DB::table('Habilidad')->insert(array (
            0 =>
            array (
                'HabilidadID' => 1,
                'Nombre' => 'Charisma',
                'Abreviatura' => 'CHA',
                'Descripcion' => 'Charisma measures your ability to interact effectively with others. It includes such factors as confidence and eloquence, and it can represent a charming or commanding personality.A Charisma check might arise when you try to influence or entertain others, when you try to make an impression or tell a convincing lie, or when you are navigating a tricky social situation. The Deception, Intimidation, Performance, and Persuasion skills reflect aptitude in certain kinds of Charisma checks.',
                'created_at' => '2023-08-19 20:42:34',
                'updated_at' => '2023-08-19 20:42:34',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'HabilidadID' => 2,
                'Nombre' => 'Constitution',
                'Abreviatura' => 'CON',
                'Descripcion' => 'Constitution measures health, stamina, and vital force.Constitution checks are uncommon, and no skills apply to Constitution checks, because the endurance this ability represents is largely passive rather than involving a specific effort on the part of a character or monster.',
                'created_at' => '2023-08-19 20:42:35',
                'updated_at' => '2023-08-19 20:42:35',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'HabilidadID' => 3,
                'Nombre' => 'Dexterity',
                'Abreviatura' => 'DEX',
                'Descripcion' => 'Dexterity measures agility, reflexes, and balance.A Dexterity check can model any attempt to move nimbly, quickly, or quietly, or to keep from falling on tricky footing. The Acrobatics, Sleight of Hand, and Stealth skills reflect aptitude in certain kinds of Dexterity checks.',
                'created_at' => '2023-08-19 20:42:36',
                'updated_at' => '2023-08-19 20:42:36',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'HabilidadID' => 4,
                'Nombre' => 'Intelligence',
                'Abreviatura' => 'INT',
                'Descripcion' => 'Intelligence measures mental acuity, accuracy of recall, and the ability to reason.An Intelligence check comes into play when you need to draw on logic, education, memory, or deductive reasoning. The Arcana, History, Investigation, Nature, and Religion skills reflect aptitude in certain kinds of Intelligence checks.',
                'created_at' => '2023-08-19 20:42:37',
                'updated_at' => '2023-08-19 20:42:37',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'HabilidadID' => 5,
                'Nombre' => 'Strength',
                'Abreviatura' => 'STR',
                'Descripcion' => 'Strength measures bodily power, athletic training, and the extent to which you can exert raw physical force.A Strength check can model any attempt to lift, push, pull, or break something, to force your body through a space, or to otherwise apply brute force to a situation. The Athletics skill reflects aptitude in certain kinds of Strength checks.',
                'created_at' => '2023-08-19 20:42:39',
                'updated_at' => '2023-08-19 20:42:39',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'HabilidadID' => 6,
                'Nombre' => 'Wisdom',
                'Abreviatura' => 'WIS',
                'Descripcion' => 'Wisdom reflects how attuned you are to the world around you and represents perceptiveness and intuition.A Wisdom check might reflect an effort to read body language, understand someone\'s feelings, notice things about the environment, or care for an injured person. The Animal Handling, Insight, Medicine, Perception, and Survival skills reflect aptitude in certain kinds of Wisdom checks.',
                'created_at' => '2023-08-19 20:42:40',
                'updated_at' => '2023-08-19 20:42:40',
                'deleted_at' => NULL,
            ),
        ));


    }
}
