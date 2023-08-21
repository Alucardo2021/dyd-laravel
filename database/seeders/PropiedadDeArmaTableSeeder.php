<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PropiedadDeArmaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('PropiedadDeArma')->delete();
        
        \DB::table('PropiedadDeArma')->insert(array (
            0 => 
            array (
                'PropiedadDeArmaID' => 1,
                'Nombre' => 'Ammunition',
            'Descripcion' => 'You can use a weapon that has the ammunition property to make a ranged attack only if you have ammunition to fire from the weapon. Each time you attack with the weapon, you expend one piece of ammunition. Drawing the ammunition from a quiver, case, or other container is part of the attack (you need a free hand to load a one-handed weapon).At the end of the battle, you can recover half your expended ammunition by taking a minute to search the battlefield. If you use a weapon that has the ammunition property to make a melee attack, you treat the weapon as an improvised weapon (see "Improvised Weapons" later in the section). A sling must be loaded to deal any damage when used in this way.',
                'created_at' => '2023-08-19 21:23:44',
                'updated_at' => '2023-08-19 21:23:44',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'PropiedadDeArmaID' => 2,
                'Nombre' => 'Finesse',
                'Descripcion' => 'When making an attack with a finesse weapon, you use your choice of your Strength or Dexterity modifier for the attack and damage rolls. You must use the same modifier for both rolls.',
                'created_at' => '2023-08-19 21:23:46',
                'updated_at' => '2023-08-19 21:23:46',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'PropiedadDeArmaID' => 3,
                'Nombre' => 'Heavy',
                'Descripcion' => 'Small creatures have disadvantage on attack rolls with heavy weapons. A heavy weapon\'s size and bulk make it too large for a Small creature to use effectively.',
                'created_at' => '2023-08-19 21:23:47',
                'updated_at' => '2023-08-19 21:23:47',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'PropiedadDeArmaID' => 4,
                'Nombre' => 'Light',
                'Descripcion' => 'A light weapon is small and easy to handle, making it ideal for use when fighting with two weapons.',
                'created_at' => '2023-08-19 21:23:48',
                'updated_at' => '2023-08-19 21:23:48',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'PropiedadDeArmaID' => 5,
                'Nombre' => 'Loading',
                'Descripcion' => 'Because of the time required to load this weapon, you can fire only one piece of ammunition from it when you use an action, bonus action, or reaction to fire it, regardless of the number of attacks you can normally make.',
                'created_at' => '2023-08-19 21:23:49',
                'updated_at' => '2023-08-19 21:23:49',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'PropiedadDeArmaID' => 6,
                'Nombre' => 'Monk',
                'Descripcion' => 'Monks gain several benefits while unarmed or wielding only monk weapons while they aren\'t wearing armor or wielding shields.',
                'created_at' => '2023-08-19 21:23:50',
                'updated_at' => '2023-08-19 21:23:50',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'PropiedadDeArmaID' => 7,
                'Nombre' => 'Reach',
                'Descripcion' => 'This weapon adds 5 feet to your reach when you attack with it, as well as when determining your reach for opportunity attacks with it.',
                'created_at' => '2023-08-19 21:23:51',
                'updated_at' => '2023-08-19 21:23:51',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'PropiedadDeArmaID' => 8,
                'Nombre' => 'Special',
            'Descripcion' => 'A weapon with the special property has unusual rules governing its use, explained in the weapon\'s description (see "Special Weapons" later in this section).',
                'created_at' => '2023-08-19 21:23:52',
                'updated_at' => '2023-08-19 21:23:52',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'PropiedadDeArmaID' => 9,
                'Nombre' => 'Thrown',
                'Descripcion' => 'If a weapon has the thrown property, you can throw the weapon to make a ranged attack. If the weapon is a melee weapon, you use the same ability modifier for that attack roll and damage roll that you would use for a melee attack with the weapon. For example, if you throw a handaxe, you use your Strength, but if you throw a dagger, you can use either your Strength or your Dexterity, since the dagger has the finesse property.',
                'created_at' => '2023-08-19 21:23:54',
                'updated_at' => '2023-08-19 21:23:54',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'PropiedadDeArmaID' => 10,
                'Nombre' => 'Two-Handed',
                'Descripcion' => 'This weapon requires two hands when you attack with it.',
                'created_at' => '2023-08-19 21:23:55',
                'updated_at' => '2023-08-19 21:23:55',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'PropiedadDeArmaID' => 11,
                'Nombre' => 'Versatile',
                'Descripcion' => 'This weapon can be used with one or two hands. A damage value in parentheses appears with the property--the damage when the weapon is used with two hands to make a melee attack.',
                'created_at' => '2023-08-19 21:23:56',
                'updated_at' => '2023-08-19 21:23:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}