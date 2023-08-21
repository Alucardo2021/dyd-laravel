<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlineamientoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('alineamiento')->delete();
        
        \DB::table('alineamiento')->insert(array (
            0 => 
            array (
                'AlineamientoID' => 1,
                'Nombre' => 'Chaotic Evil',
                'Abreviatura' => 'CE',
            'Descripcion' => 'Chaotic evil (CE) creatures act with arbitrary violence, spurred by their greed, hatred, or bloodlust. Demons, red dragons, and orcs are chaotic evil.',
                'created_at' => '2023-08-18 21:31:35',
                'updated_at' => '2023-08-18 21:31:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'AlineamientoID' => 2,
                'Nombre' => 'Chaotic Good',
                'Abreviatura' => 'CG',
            'Descripcion' => 'Chaotic good (CG) creatures act as their conscience directs, with little regard for what others expect. Copper dragons, many elves, and unicorns are chaotic good.',
                'created_at' => '2023-08-18 21:31:37',
                'updated_at' => '2023-08-18 21:31:37',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'AlineamientoID' => 3,
                'Nombre' => 'Chaotic Neutral',
                'Abreviatura' => 'CN',
            'Descripcion' => 'Chaotic neutral (CN) creatures follow their whims, holding their personal freedom above all else. Many barbarians and rogues, and some bards, are chaotic neutral.',
                'created_at' => '2023-08-18 21:31:38',
                'updated_at' => '2023-08-18 21:31:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'AlineamientoID' => 4,
                'Nombre' => 'Lawful Evil',
                'Abreviatura' => 'LE',
            'Descripcion' => 'Lawful evil (LE) creatures methodically take what they want, within the limits of a code of tradition, loyalty, or order. Devils, blue dragons, and hobgoblins are lawful evil.',
                'created_at' => '2023-08-18 21:31:39',
                'updated_at' => '2023-08-18 21:31:39',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'AlineamientoID' => 5,
                'Nombre' => 'Lawful Good',
                'Abreviatura' => 'LG',
            'Descripcion' => 'Lawful good (LG) creatures can be counted on to do the right thing as expected by society. Gold dragons, paladins, and most dwarves are lawful good.',
                'created_at' => '2023-08-18 21:31:40',
                'updated_at' => '2023-08-18 21:31:40',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'AlineamientoID' => 6,
                'Nombre' => 'Lawful Neutral',
                'Abreviatura' => 'LN',
            'Descripcion' => 'Lawful neutral (LN) individuals act in accordance with law, tradition, or personal codes. Many monks and some wizards are lawful neutral.',
                'created_at' => '2023-08-18 21:31:41',
                'updated_at' => '2023-08-18 21:31:41',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'AlineamientoID' => 7,
                'Nombre' => 'Neutral',
                'Abreviatura' => 'N',
            'Descripcion' => 'Neutral (N) is the alignment of those who prefer to steer clear of moral questions and don\'t take sides, doing what seems best at the time. Lizardfolk, most druids, and many humans are neutral.',
                'created_at' => '2023-08-18 21:31:42',
                'updated_at' => '2023-08-18 21:31:42',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'AlineamientoID' => 8,
                'Nombre' => 'Neutral Evil',
                'Abreviatura' => 'NE',
            'Descripcion' => 'Neutral evil (NE) is the alignment of those who do whatever they can get away with, without compassion or qualms. Many drow, some cloud giants, and goblins are neutral evil.',
                'created_at' => '2023-08-18 21:31:43',
                'updated_at' => '2023-08-18 21:31:43',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'AlineamientoID' => 9,
                'Nombre' => 'Neutral Good',
                'Abreviatura' => 'NG',
            'Descripcion' => 'Neutral good (NG) folk do the best they can to help others according to their needs. Many celestials, some cloud giants, and most gnomes are neutral good.',
                'created_at' => '2023-08-18 21:31:44',
                'updated_at' => '2023-08-18 21:31:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}