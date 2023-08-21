<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProficienciaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('proficiencia')->delete();

        DB::table('proficiencia')->insert(array (
            0 =>
            array (
                'ProficienciaID' => 1,
                'Nombre' => 'Alchemist\'s Supplies',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:56:21',
                'updated_at' => '2023-08-18 20:56:21',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'ProficienciaID' => 2,
                'Nombre' => 'All armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:56:22',
                'updated_at' => '2023-08-18 20:56:22',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'ProficienciaID' => 3,
                'Nombre' => 'Bagpipes',
                'Tipo' => 'Musical Instruments',
                'created_at' => '2023-08-18 20:56:23',
                'updated_at' => '2023-08-18 20:56:23',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'ProficienciaID' => 4,
                'Nombre' => 'Battleaxes',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:24',
                'updated_at' => '2023-08-18 20:56:24',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'ProficienciaID' => 5,
                'Nombre' => 'Blowguns',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:26',
                'updated_at' => '2023-08-18 20:56:26',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'ProficienciaID' => 6,
                'Nombre' => 'Breastplate',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:56:27',
                'updated_at' => '2023-08-18 20:56:27',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'ProficienciaID' => 7,
                'Nombre' => 'Brewer\'s Supplies',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:56:28',
                'updated_at' => '2023-08-18 20:56:28',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'ProficienciaID' => 8,
                'Nombre' => 'Calligrapher\'s Supplies',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:56:29',
                'updated_at' => '2023-08-18 20:56:29',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'ProficienciaID' => 9,
                'Nombre' => 'Carpenter\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:56:30',
                'updated_at' => '2023-08-18 20:56:30',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'ProficienciaID' => 10,
                'Nombre' => 'Cartographer\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:56:31',
                'updated_at' => '2023-08-18 20:56:31',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'ProficienciaID' => 11,
                'Nombre' => 'Chain Mail',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:56:32',
                'updated_at' => '2023-08-18 20:56:32',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'ProficienciaID' => 12,
                'Nombre' => 'Chain Shirt',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:56:33',
                'updated_at' => '2023-08-18 20:56:33',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'ProficienciaID' => 13,
                'Nombre' => 'Clubs',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:34',
                'updated_at' => '2023-08-18 20:56:34',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'ProficienciaID' => 14,
                'Nombre' => 'Cobbler\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:56:35',
                'updated_at' => '2023-08-18 20:56:35',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'ProficienciaID' => 15,
                'Nombre' => 'Cook\'s utensils',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:56:36',
                'updated_at' => '2023-08-18 20:56:36',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'ProficienciaID' => 16,
                'Nombre' => 'Crossbows, heavy',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:37',
                'updated_at' => '2023-08-18 20:56:37',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'ProficienciaID' => 17,
                'Nombre' => 'Crossbows, light',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:38',
                'updated_at' => '2023-08-18 20:56:38',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'ProficienciaID' => 18,
                'Nombre' => 'Daggers',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:40',
                'updated_at' => '2023-08-18 20:56:40',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'ProficienciaID' => 19,
                'Nombre' => 'Darts',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:41',
                'updated_at' => '2023-08-18 20:56:41',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'ProficienciaID' => 20,
                'Nombre' => 'Dice Set',
                'Tipo' => 'Gaming Sets',
                'created_at' => '2023-08-18 20:56:42',
                'updated_at' => '2023-08-18 20:56:42',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'ProficienciaID' => 21,
                'Nombre' => 'Disguise Kit',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:56:43',
                'updated_at' => '2023-08-18 20:56:43',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'ProficienciaID' => 22,
                'Nombre' => 'Drum',
                'Tipo' => 'Musical Instruments',
                'created_at' => '2023-08-18 20:56:44',
                'updated_at' => '2023-08-18 20:56:44',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'ProficienciaID' => 23,
                'Nombre' => 'Dulcimer',
                'Tipo' => 'Musical Instruments',
                'created_at' => '2023-08-18 20:56:45',
                'updated_at' => '2023-08-18 20:56:45',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'ProficienciaID' => 24,
                'Nombre' => 'Flails',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:46',
                'updated_at' => '2023-08-18 20:56:46',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'ProficienciaID' => 25,
                'Nombre' => 'Flute',
                'Tipo' => 'Musical Instruments',
                'created_at' => '2023-08-18 20:56:47',
                'updated_at' => '2023-08-18 20:56:47',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'ProficienciaID' => 26,
                'Nombre' => 'Forgery Kit',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:56:48',
                'updated_at' => '2023-08-18 20:56:48',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'ProficienciaID' => 27,
                'Nombre' => 'Glaives',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:49',
                'updated_at' => '2023-08-18 20:56:49',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'ProficienciaID' => 28,
                'Nombre' => 'Glassblower\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:56:50',
                'updated_at' => '2023-08-18 20:56:50',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'ProficienciaID' => 29,
                'Nombre' => 'Greataxes',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:51',
                'updated_at' => '2023-08-18 20:56:51',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'ProficienciaID' => 30,
                'Nombre' => 'Greatclubs',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:53',
                'updated_at' => '2023-08-18 20:56:53',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'ProficienciaID' => 31,
                'Nombre' => 'Greatswords',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:54',
                'updated_at' => '2023-08-18 20:56:54',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'ProficienciaID' => 32,
                'Nombre' => 'Halberds',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:55',
                'updated_at' => '2023-08-18 20:56:55',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'ProficienciaID' => 33,
                'Nombre' => 'Half Plate Armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:56:56',
                'updated_at' => '2023-08-18 20:56:56',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'ProficienciaID' => 34,
                'Nombre' => 'Hand crossbows',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:57',
                'updated_at' => '2023-08-18 20:56:57',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'ProficienciaID' => 35,
                'Nombre' => 'Handaxes',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:56:58',
                'updated_at' => '2023-08-18 20:56:58',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'ProficienciaID' => 36,
                'Nombre' => 'Heavy Armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:56:59',
                'updated_at' => '2023-08-18 20:56:59',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'ProficienciaID' => 37,
                'Nombre' => 'Herbalism Kit',
                'Tipo' => 'Other',
                'created_at' => '2023-08-18 20:57:00',
                'updated_at' => '2023-08-18 20:57:00',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'ProficienciaID' => 38,
                'Nombre' => 'Hide Armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:57:02',
                'updated_at' => '2023-08-18 20:57:02',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'ProficienciaID' => 39,
                'Nombre' => 'Horn',
                'Tipo' => 'Musical Instruments',
                'created_at' => '2023-08-18 20:57:03',
                'updated_at' => '2023-08-18 20:57:03',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'ProficienciaID' => 40,
                'Nombre' => 'Javelins',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:04',
                'updated_at' => '2023-08-18 20:57:04',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'ProficienciaID' => 41,
                'Nombre' => 'Jeweler\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:57:05',
                'updated_at' => '2023-08-18 20:57:05',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'ProficienciaID' => 42,
                'Nombre' => 'Lances',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:06',
                'updated_at' => '2023-08-18 20:57:06',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'ProficienciaID' => 43,
                'Nombre' => 'Land Vehicles',
                'Tipo' => 'Vehicles',
                'created_at' => '2023-08-18 20:57:07',
                'updated_at' => '2023-08-18 20:57:07',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'ProficienciaID' => 44,
                'Nombre' => 'Leather Armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:57:08',
                'updated_at' => '2023-08-18 20:57:08',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'ProficienciaID' => 45,
                'Nombre' => 'Leatherworker\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:57:09',
                'updated_at' => '2023-08-18 20:57:09',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'ProficienciaID' => 46,
                'Nombre' => 'Light Armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:57:10',
                'updated_at' => '2023-08-18 20:57:10',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'ProficienciaID' => 47,
                'Nombre' => 'Light hammers',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:11',
                'updated_at' => '2023-08-18 20:57:11',
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'ProficienciaID' => 48,
                'Nombre' => 'Longbows',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:12',
                'updated_at' => '2023-08-18 20:57:12',
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'ProficienciaID' => 49,
                'Nombre' => 'Longswords',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:13',
                'updated_at' => '2023-08-18 20:57:13',
                'deleted_at' => NULL,
            ),
            49 =>
            array (
                'ProficienciaID' => 50,
                'Nombre' => 'Lute',
                'Tipo' => 'Musical Instruments',
                'created_at' => '2023-08-18 20:57:15',
                'updated_at' => '2023-08-18 20:57:15',
                'deleted_at' => NULL,
            ),
            50 =>
            array (
                'ProficienciaID' => 51,
                'Nombre' => 'Lyre',
                'Tipo' => 'Musical Instruments',
                'created_at' => '2023-08-18 20:57:16',
                'updated_at' => '2023-08-18 20:57:16',
                'deleted_at' => NULL,
            ),
            51 =>
            array (
                'ProficienciaID' => 52,
                'Nombre' => 'Maces',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:17',
                'updated_at' => '2023-08-18 20:57:17',
                'deleted_at' => NULL,
            ),
            52 =>
            array (
                'ProficienciaID' => 53,
                'Nombre' => 'Martial Weapons',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:18',
                'updated_at' => '2023-08-18 20:57:18',
                'deleted_at' => NULL,
            ),
            53 =>
            array (
                'ProficienciaID' => 54,
                'Nombre' => 'Mason\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:57:19',
                'updated_at' => '2023-08-18 20:57:19',
                'deleted_at' => NULL,
            ),
            54 =>
            array (
                'ProficienciaID' => 55,
                'Nombre' => 'Mauls',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:20',
                'updated_at' => '2023-08-18 20:57:20',
                'deleted_at' => NULL,
            ),
            55 =>
            array (
                'ProficienciaID' => 56,
                'Nombre' => 'Medium Armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:57:21',
                'updated_at' => '2023-08-18 20:57:21',
                'deleted_at' => NULL,
            ),
            56 =>
            array (
                'ProficienciaID' => 57,
                'Nombre' => 'Morningstars',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:22',
                'updated_at' => '2023-08-18 20:57:22',
                'deleted_at' => NULL,
            ),
            57 =>
            array (
                'ProficienciaID' => 58,
                'Nombre' => 'Navigator\'s Tools',
                'Tipo' => 'Other',
                'created_at' => '2023-08-18 20:57:23',
                'updated_at' => '2023-08-18 20:57:23',
                'deleted_at' => NULL,
            ),
            58 =>
            array (
                'ProficienciaID' => 59,
                'Nombre' => 'Nets',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:24',
                'updated_at' => '2023-08-18 20:57:24',
                'deleted_at' => NULL,
            ),
            59 =>
            array (
                'ProficienciaID' => 60,
                'Nombre' => 'Padded Armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:57:25',
                'updated_at' => '2023-08-18 20:57:25',
                'deleted_at' => NULL,
            ),
            60 =>
            array (
                'ProficienciaID' => 61,
                'Nombre' => 'Painter\'s Supplies',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:57:26',
                'updated_at' => '2023-08-18 20:57:26',
                'deleted_at' => NULL,
            ),
            61 =>
            array (
                'ProficienciaID' => 62,
                'Nombre' => 'Pan flute',
                'Tipo' => 'Musical Instruments',
                'created_at' => '2023-08-18 20:57:28',
                'updated_at' => '2023-08-18 20:57:28',
                'deleted_at' => NULL,
            ),
            62 =>
            array (
                'ProficienciaID' => 63,
                'Nombre' => 'Pikes',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:29',
                'updated_at' => '2023-08-18 20:57:29',
                'deleted_at' => NULL,
            ),
            63 =>
            array (
                'ProficienciaID' => 64,
                'Nombre' => 'Plate Armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:57:30',
                'updated_at' => '2023-08-18 20:57:30',
                'deleted_at' => NULL,
            ),
            64 =>
            array (
                'ProficienciaID' => 65,
                'Nombre' => 'Playing Card Set',
                'Tipo' => 'Gaming Sets',
                'created_at' => '2023-08-18 20:57:31',
                'updated_at' => '2023-08-18 20:57:31',
                'deleted_at' => NULL,
            ),
            65 =>
            array (
                'ProficienciaID' => 66,
                'Nombre' => 'Poisoner\'s Kit',
                'Tipo' => 'Other',
                'created_at' => '2023-08-18 20:57:32',
                'updated_at' => '2023-08-18 20:57:32',
                'deleted_at' => NULL,
            ),
            66 =>
            array (
                'ProficienciaID' => 67,
                'Nombre' => 'Potter\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:57:33',
                'updated_at' => '2023-08-18 20:57:33',
                'deleted_at' => NULL,
            ),
            67 =>
            array (
                'ProficienciaID' => 68,
                'Nombre' => 'Quarterstaffs',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:34',
                'updated_at' => '2023-08-18 20:57:34',
                'deleted_at' => NULL,
            ),
            68 =>
            array (
                'ProficienciaID' => 69,
                'Nombre' => 'Rapiers',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:35',
                'updated_at' => '2023-08-18 20:57:35',
                'deleted_at' => NULL,
            ),
            69 =>
            array (
                'ProficienciaID' => 70,
                'Nombre' => 'Ring Mail',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:57:36',
                'updated_at' => '2023-08-18 20:57:36',
                'deleted_at' => NULL,
            ),
            70 =>
            array (
                'ProficienciaID' => 71,
                'Nombre' => 'Saving Throw: CHA',
                'Tipo' => 'Saving Throws',
                'created_at' => '2023-08-18 20:57:37',
                'updated_at' => '2023-08-18 20:57:37',
                'deleted_at' => NULL,
            ),
            71 =>
            array (
                'ProficienciaID' => 72,
                'Nombre' => 'Saving Throw: CON',
                'Tipo' => 'Saving Throws',
                'created_at' => '2023-08-18 20:57:38',
                'updated_at' => '2023-08-18 20:57:38',
                'deleted_at' => NULL,
            ),
            72 =>
            array (
                'ProficienciaID' => 73,
                'Nombre' => 'Saving Throw: DEX',
                'Tipo' => 'Saving Throws',
                'created_at' => '2023-08-18 20:57:39',
                'updated_at' => '2023-08-18 20:57:39',
                'deleted_at' => NULL,
            ),
            73 =>
            array (
                'ProficienciaID' => 74,
                'Nombre' => 'Saving Throw: INT',
                'Tipo' => 'Saving Throws',
                'created_at' => '2023-08-18 20:57:40',
                'updated_at' => '2023-08-18 20:57:40',
                'deleted_at' => NULL,
            ),
            74 =>
            array (
                'ProficienciaID' => 75,
                'Nombre' => 'Saving Throw: STR',
                'Tipo' => 'Saving Throws',
                'created_at' => '2023-08-18 20:57:41',
                'updated_at' => '2023-08-18 20:57:41',
                'deleted_at' => NULL,
            ),
            75 =>
            array (
                'ProficienciaID' => 76,
                'Nombre' => 'Saving Throw: WIS',
                'Tipo' => 'Saving Throws',
                'created_at' => '2023-08-18 20:57:42',
                'updated_at' => '2023-08-18 20:57:42',
                'deleted_at' => NULL,
            ),
            76 =>
            array (
                'ProficienciaID' => 77,
                'Nombre' => 'Scale Mail',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:57:43',
                'updated_at' => '2023-08-18 20:57:43',
                'deleted_at' => NULL,
            ),
            77 =>
            array (
                'ProficienciaID' => 78,
                'Nombre' => 'Scimitars',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:44',
                'updated_at' => '2023-08-18 20:57:44',
                'deleted_at' => NULL,
            ),
            78 =>
            array (
                'ProficienciaID' => 79,
                'Nombre' => 'Shawm',
                'Tipo' => 'Musical Instruments',
                'created_at' => '2023-08-18 20:57:45',
                'updated_at' => '2023-08-18 20:57:45',
                'deleted_at' => NULL,
            ),
            79 =>
            array (
                'ProficienciaID' => 80,
                'Nombre' => 'Shields',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:57:46',
                'updated_at' => '2023-08-18 20:57:46',
                'deleted_at' => NULL,
            ),
            80 =>
            array (
                'ProficienciaID' => 81,
                'Nombre' => 'Shortbows',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:47',
                'updated_at' => '2023-08-18 20:57:47',
                'deleted_at' => NULL,
            ),
            81 =>
            array (
                'ProficienciaID' => 82,
                'Nombre' => 'Shortswords',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:48',
                'updated_at' => '2023-08-18 20:57:48',
                'deleted_at' => NULL,
            ),
            82 =>
            array (
                'ProficienciaID' => 83,
                'Nombre' => 'Sickles',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:49',
                'updated_at' => '2023-08-18 20:57:49',
                'deleted_at' => NULL,
            ),
            83 =>
            array (
                'ProficienciaID' => 84,
                'Nombre' => 'Simple Weapons',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:57:50',
                'updated_at' => '2023-08-18 20:57:50',
                'deleted_at' => NULL,
            ),
            84 =>
            array (
                'ProficienciaID' => 85,
                'Nombre' => 'Skill: Acrobatics',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:57:51',
                'updated_at' => '2023-08-18 20:57:51',
                'deleted_at' => NULL,
            ),
            85 =>
            array (
                'ProficienciaID' => 86,
                'Nombre' => 'Skill: Animal Handling',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:57:52',
                'updated_at' => '2023-08-18 20:57:52',
                'deleted_at' => NULL,
            ),
            86 =>
            array (
                'ProficienciaID' => 87,
                'Nombre' => 'Skill: Arcana',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:57:53',
                'updated_at' => '2023-08-18 20:57:53',
                'deleted_at' => NULL,
            ),
            87 =>
            array (
                'ProficienciaID' => 88,
                'Nombre' => 'Skill: Athletics',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:57:55',
                'updated_at' => '2023-08-18 20:57:55',
                'deleted_at' => NULL,
            ),
            88 =>
            array (
                'ProficienciaID' => 89,
                'Nombre' => 'Skill: Deception',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:57:56',
                'updated_at' => '2023-08-18 20:57:56',
                'deleted_at' => NULL,
            ),
            89 =>
            array (
                'ProficienciaID' => 90,
                'Nombre' => 'Skill: History',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:57:57',
                'updated_at' => '2023-08-18 20:57:57',
                'deleted_at' => NULL,
            ),
            90 =>
            array (
                'ProficienciaID' => 91,
                'Nombre' => 'Skill: Insight',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:57:58',
                'updated_at' => '2023-08-18 20:57:58',
                'deleted_at' => NULL,
            ),
            91 =>
            array (
                'ProficienciaID' => 92,
                'Nombre' => 'Skill: Intimidation',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:57:59',
                'updated_at' => '2023-08-18 20:57:59',
                'deleted_at' => NULL,
            ),
            92 =>
            array (
                'ProficienciaID' => 93,
                'Nombre' => 'Skill: Investigation',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:58:00',
                'updated_at' => '2023-08-18 20:58:00',
                'deleted_at' => NULL,
            ),
            93 =>
            array (
                'ProficienciaID' => 94,
                'Nombre' => 'Skill: Medicine',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:58:01',
                'updated_at' => '2023-08-18 20:58:01',
                'deleted_at' => NULL,
            ),
            94 =>
            array (
                'ProficienciaID' => 95,
                'Nombre' => 'Skill: Nature',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:58:02',
                'updated_at' => '2023-08-18 20:58:02',
                'deleted_at' => NULL,
            ),
            95 =>
            array (
                'ProficienciaID' => 96,
                'Nombre' => 'Skill: Perception',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:58:03',
                'updated_at' => '2023-08-18 20:58:03',
                'deleted_at' => NULL,
            ),
            96 =>
            array (
                'ProficienciaID' => 97,
                'Nombre' => 'Skill: Performance',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:58:04',
                'updated_at' => '2023-08-18 20:58:04',
                'deleted_at' => NULL,
            ),
            97 =>
            array (
                'ProficienciaID' => 98,
                'Nombre' => 'Skill: Persuasion',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:58:05',
                'updated_at' => '2023-08-18 20:58:05',
                'deleted_at' => NULL,
            ),
            98 =>
            array (
                'ProficienciaID' => 99,
                'Nombre' => 'Skill: Religion',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:58:06',
                'updated_at' => '2023-08-18 20:58:06',
                'deleted_at' => NULL,
            ),
            99 =>
            array (
                'ProficienciaID' => 100,
                'Nombre' => 'Skill: Sleight of Hand',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:58:07',
                'updated_at' => '2023-08-18 20:58:07',
                'deleted_at' => NULL,
            ),
            100 =>
            array (
                'ProficienciaID' => 101,
                'Nombre' => 'Skill: Stealth',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:58:08',
                'updated_at' => '2023-08-18 20:58:08',
                'deleted_at' => NULL,
            ),
            101 =>
            array (
                'ProficienciaID' => 102,
                'Nombre' => 'Skill: Survival',
                'Tipo' => 'Skills',
                'created_at' => '2023-08-18 20:58:09',
                'updated_at' => '2023-08-18 20:58:09',
                'deleted_at' => NULL,
            ),
            102 =>
            array (
                'ProficienciaID' => 103,
                'Nombre' => 'Slings',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:58:10',
                'updated_at' => '2023-08-18 20:58:10',
                'deleted_at' => NULL,
            ),
            103 =>
            array (
                'ProficienciaID' => 104,
                'Nombre' => 'Smith\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:58:11',
                'updated_at' => '2023-08-18 20:58:11',
                'deleted_at' => NULL,
            ),
            104 =>
            array (
                'ProficienciaID' => 105,
                'Nombre' => 'Spears',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:58:12',
                'updated_at' => '2023-08-18 20:58:12',
                'deleted_at' => NULL,
            ),
            105 =>
            array (
                'ProficienciaID' => 106,
                'Nombre' => 'Splint Armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:58:13',
                'updated_at' => '2023-08-18 20:58:13',
                'deleted_at' => NULL,
            ),
            106 =>
            array (
                'ProficienciaID' => 107,
                'Nombre' => 'Studded Leather Armor',
                'Tipo' => 'Armor',
                'created_at' => '2023-08-18 20:58:14',
                'updated_at' => '2023-08-18 20:58:14',
                'deleted_at' => NULL,
            ),
            107 =>
            array (
                'ProficienciaID' => 108,
                'Nombre' => 'Thieves\' Tools',
                'Tipo' => 'Other',
                'created_at' => '2023-08-18 20:58:15',
                'updated_at' => '2023-08-18 20:58:15',
                'deleted_at' => NULL,
            ),
            108 =>
            array (
                'ProficienciaID' => 109,
                'Nombre' => 'Tinker\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:58:16',
                'updated_at' => '2023-08-18 20:58:16',
                'deleted_at' => NULL,
            ),
            109 =>
            array (
                'ProficienciaID' => 110,
                'Nombre' => 'Tridents',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:58:17',
                'updated_at' => '2023-08-18 20:58:17',
                'deleted_at' => NULL,
            ),
            110 =>
            array (
                'ProficienciaID' => 111,
                'Nombre' => 'Viol',
                'Tipo' => 'Musical Instruments',
                'created_at' => '2023-08-18 20:58:18',
                'updated_at' => '2023-08-18 20:58:18',
                'deleted_at' => NULL,
            ),
            111 =>
            array (
                'ProficienciaID' => 112,
                'Nombre' => 'War picks',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:58:19',
                'updated_at' => '2023-08-18 20:58:19',
                'deleted_at' => NULL,
            ),
            112 =>
            array (
                'ProficienciaID' => 113,
                'Nombre' => 'Warhammers',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:58:20',
                'updated_at' => '2023-08-18 20:58:20',
                'deleted_at' => NULL,
            ),
            113 =>
            array (
                'ProficienciaID' => 114,
                'Nombre' => 'Water Vehicles',
                'Tipo' => 'Vehicles',
                'created_at' => '2023-08-18 20:58:21',
                'updated_at' => '2023-08-18 20:58:21',
                'deleted_at' => NULL,
            ),
            114 =>
            array (
                'ProficienciaID' => 115,
                'Nombre' => 'Weaver\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:58:22',
                'updated_at' => '2023-08-18 20:58:22',
                'deleted_at' => NULL,
            ),
            115 =>
            array (
                'ProficienciaID' => 116,
                'Nombre' => 'Whips',
                'Tipo' => 'Weapons',
                'created_at' => '2023-08-18 20:58:23',
                'updated_at' => '2023-08-18 20:58:23',
                'deleted_at' => NULL,
            ),
            116 =>
            array (
                'ProficienciaID' => 117,
                'Nombre' => 'Woodcarver\'s Tools',
                'Tipo' => 'Artisan\'s Tools',
                'created_at' => '2023-08-18 20:58:24',
                'updated_at' => '2023-08-18 20:58:24',
                'deleted_at' => NULL,
            ),
        ));


    }
}
