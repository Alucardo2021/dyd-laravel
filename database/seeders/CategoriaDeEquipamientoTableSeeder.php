<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriaDeEquipamientoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('CategoriaDeEquipamiento')->delete();
        
        \DB::table('CategoriaDeEquipamiento')->insert(array (
            0 => 
            array (
                'CategoriaDeEquipamientoID' => 1,
                'Nombre' => 'Adventuring Gear',
                'created_at' => '2023-08-19 21:31:36',
                'updated_at' => '2023-08-19 21:31:36',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'CategoriaDeEquipamientoID' => 2,
                'Nombre' => 'Ammunition',
                'created_at' => '2023-08-19 21:31:37',
                'updated_at' => '2023-08-19 21:31:37',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'CategoriaDeEquipamientoID' => 3,
                'Nombre' => 'Arcane Foci',
                'created_at' => '2023-08-19 21:31:38',
                'updated_at' => '2023-08-19 21:31:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'CategoriaDeEquipamientoID' => 4,
                'Nombre' => 'Armor',
                'created_at' => '2023-08-19 21:31:40',
                'updated_at' => '2023-08-19 21:31:40',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'CategoriaDeEquipamientoID' => 5,
                'Nombre' => 'Artisan\'s Tools',
                'created_at' => '2023-08-19 21:31:41',
                'updated_at' => '2023-08-19 21:31:41',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'CategoriaDeEquipamientoID' => 6,
                'Nombre' => 'Druidic Foci',
                'created_at' => '2023-08-19 21:31:42',
                'updated_at' => '2023-08-19 21:31:42',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'CategoriaDeEquipamientoID' => 7,
                'Nombre' => 'Equipment Packs',
                'created_at' => '2023-08-19 21:31:43',
                'updated_at' => '2023-08-19 21:31:43',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'CategoriaDeEquipamientoID' => 8,
                'Nombre' => 'Gaming Sets',
                'created_at' => '2023-08-19 21:31:44',
                'updated_at' => '2023-08-19 21:31:44',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'CategoriaDeEquipamientoID' => 9,
                'Nombre' => 'Heavy Armor',
                'created_at' => '2023-08-19 21:31:45',
                'updated_at' => '2023-08-19 21:31:45',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'CategoriaDeEquipamientoID' => 10,
                'Nombre' => 'Holy Symbols',
                'created_at' => '2023-08-19 21:31:46',
                'updated_at' => '2023-08-19 21:31:46',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'CategoriaDeEquipamientoID' => 11,
                'Nombre' => 'Kits',
                'created_at' => '2023-08-19 21:31:47',
                'updated_at' => '2023-08-19 21:31:47',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'CategoriaDeEquipamientoID' => 12,
                'Nombre' => 'Land Vehicles',
                'created_at' => '2023-08-19 21:31:48',
                'updated_at' => '2023-08-19 21:31:48',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'CategoriaDeEquipamientoID' => 13,
                'Nombre' => 'Light Armor',
                'created_at' => '2023-08-19 21:31:49',
                'updated_at' => '2023-08-19 21:31:49',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'CategoriaDeEquipamientoID' => 14,
                'Nombre' => 'Martial Melee Weapons',
                'created_at' => '2023-08-19 21:31:50',
                'updated_at' => '2023-08-19 21:31:50',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'CategoriaDeEquipamientoID' => 15,
                'Nombre' => 'Martial Ranged Weapons',
                'created_at' => '2023-08-19 21:31:51',
                'updated_at' => '2023-08-19 21:31:51',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'CategoriaDeEquipamientoID' => 16,
                'Nombre' => 'Martial Weapons',
                'created_at' => '2023-08-19 21:31:53',
                'updated_at' => '2023-08-19 21:31:53',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'CategoriaDeEquipamientoID' => 17,
                'Nombre' => 'Medium Armor',
                'created_at' => '2023-08-19 21:31:54',
                'updated_at' => '2023-08-19 21:31:54',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'CategoriaDeEquipamientoID' => 18,
                'Nombre' => 'Melee Weapons',
                'created_at' => '2023-08-19 21:31:55',
                'updated_at' => '2023-08-19 21:31:55',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'CategoriaDeEquipamientoID' => 19,
                'Nombre' => 'Mounts and Other Animals',
                'created_at' => '2023-08-19 21:31:56',
                'updated_at' => '2023-08-19 21:31:56',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'CategoriaDeEquipamientoID' => 20,
                'Nombre' => 'Mounts and Vehicles',
                'created_at' => '2023-08-19 21:31:58',
                'updated_at' => '2023-08-19 21:31:58',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'CategoriaDeEquipamientoID' => 21,
                'Nombre' => 'Musical Instruments',
                'created_at' => '2023-08-19 21:31:59',
                'updated_at' => '2023-08-19 21:31:59',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'CategoriaDeEquipamientoID' => 22,
                'Nombre' => 'Other Tools',
                'created_at' => '2023-08-19 21:32:00',
                'updated_at' => '2023-08-19 21:32:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'CategoriaDeEquipamientoID' => 23,
                'Nombre' => 'Potion',
                'created_at' => '2023-08-19 21:32:01',
                'updated_at' => '2023-08-19 21:32:01',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'CategoriaDeEquipamientoID' => 24,
                'Nombre' => 'Ranged Weapons',
                'created_at' => '2023-08-19 21:32:02',
                'updated_at' => '2023-08-19 21:32:02',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'CategoriaDeEquipamientoID' => 25,
                'Nombre' => 'Ring',
                'created_at' => '2023-08-19 21:32:03',
                'updated_at' => '2023-08-19 21:32:03',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'CategoriaDeEquipamientoID' => 26,
                'Nombre' => 'Rod',
                'created_at' => '2023-08-19 21:32:04',
                'updated_at' => '2023-08-19 21:32:04',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'CategoriaDeEquipamientoID' => 27,
                'Nombre' => 'Scroll',
                'created_at' => '2023-08-19 21:32:05',
                'updated_at' => '2023-08-19 21:32:05',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'CategoriaDeEquipamientoID' => 28,
                'Nombre' => 'Shields',
                'created_at' => '2023-08-19 21:32:07',
                'updated_at' => '2023-08-19 21:32:07',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'CategoriaDeEquipamientoID' => 29,
                'Nombre' => 'Simple Melee Weapons',
                'created_at' => '2023-08-19 21:32:08',
                'updated_at' => '2023-08-19 21:32:08',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'CategoriaDeEquipamientoID' => 30,
                'Nombre' => 'Simple Ranged Weapons',
                'created_at' => '2023-08-19 21:32:09',
                'updated_at' => '2023-08-19 21:32:09',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'CategoriaDeEquipamientoID' => 31,
                'Nombre' => 'Simple Weapons',
                'created_at' => '2023-08-19 21:32:10',
                'updated_at' => '2023-08-19 21:32:10',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'CategoriaDeEquipamientoID' => 32,
                'Nombre' => 'Staff',
                'created_at' => '2023-08-19 21:32:11',
                'updated_at' => '2023-08-19 21:32:11',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'CategoriaDeEquipamientoID' => 33,
                'Nombre' => 'Standard Gear',
                'created_at' => '2023-08-19 21:32:12',
                'updated_at' => '2023-08-19 21:32:12',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'CategoriaDeEquipamientoID' => 34,
                'Nombre' => 'Tack, Harness, and Drawn Vehicles',
                'created_at' => '2023-08-19 21:32:13',
                'updated_at' => '2023-08-19 21:32:13',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'CategoriaDeEquipamientoID' => 35,
                'Nombre' => 'Tools',
                'created_at' => '2023-08-19 21:32:14',
                'updated_at' => '2023-08-19 21:32:14',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'CategoriaDeEquipamientoID' => 36,
                'Nombre' => 'Wand',
                'created_at' => '2023-08-19 21:32:15',
                'updated_at' => '2023-08-19 21:32:15',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'CategoriaDeEquipamientoID' => 37,
                'Nombre' => 'Waterborne Vehicles',
                'created_at' => '2023-08-19 21:32:16',
                'updated_at' => '2023-08-19 21:32:16',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'CategoriaDeEquipamientoID' => 38,
                'Nombre' => 'Weapon',
                'created_at' => '2023-08-19 21:32:17',
                'updated_at' => '2023-08-19 21:32:17',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'CategoriaDeEquipamientoID' => 39,
                'Nombre' => 'Wondrous Items',
                'created_at' => '2023-08-19 21:32:19',
                'updated_at' => '2023-08-19 21:32:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}