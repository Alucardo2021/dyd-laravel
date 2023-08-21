<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Skill')->delete();
        
        \DB::table('Skill')->insert(array (
            0 => 
            array (
                'SkillID' => 1,
                'Nombre' => 'Acrobatics',
            'Descripcion' => 'Your Dexterity (Acrobatics) check covers your attempt to stay on your feet in a tricky situation, such as when you\'re trying to run across a sheet of ice, balance on a tightrope, or stay upright on a rocking ship\'s deck. The GM might also call for a Dexterity (Acrobatics) check to see if you can perform acrobatic stunts, including dives, rolls, somersaults, and flips.',
                'HabilidadID' => 3,
                'created_at' => '2023-08-19 22:00:21',
                'updated_at' => '2023-08-19 22:00:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'SkillID' => 2,
                'Nombre' => 'Animal Handling',
            'Descripcion' => 'When there is any question whether you can calm down a domesticated animal, keep a mount from getting spooked, or intuit an animal\'s intentions, the GM might call for a Wisdom (Animal Handling) check. You also make a Wisdom (Animal Handling) check to control your mount when you attempt a risky maneuver.',
                'HabilidadID' => 6,
                'created_at' => '2023-08-19 22:00:22',
                'updated_at' => '2023-08-19 22:00:22',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'SkillID' => 3,
                'Nombre' => 'Arcana',
            'Descripcion' => 'Your Intelligence (Arcana) check measures your ability to recall lore about spells, magic items, eldritch symbols, magical traditions, the planes of existence, and the inhabitants of those planes.',
                'HabilidadID' => 4,
                'created_at' => '2023-08-19 22:00:23',
                'updated_at' => '2023-08-19 22:00:23',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'SkillID' => 4,
                'Nombre' => 'Athletics',
            'Descripcion' => 'Your Strength (Athletics) check covers difficult situations you encounter while climbing, jumping, or swimming.',
                'HabilidadID' => 5,
                'created_at' => '2023-08-19 22:00:24',
                'updated_at' => '2023-08-19 22:00:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'SkillID' => 5,
                'Nombre' => 'Deception',
            'Descripcion' => 'Your Charisma (Deception) check determines whether you can convincingly hide the truth, either verbally or through your actions. This deception can encompass everything from misleading others through ambiguity to telling outright lies. Typical situations include trying to fast- talk a guard, con a merchant, earn money through gambling, pass yourself off in a disguise, dull someone\'s suspicions with false assurances, or maintain a straight face while telling a blatant lie.',
                'HabilidadID' => 1,
                'created_at' => '2023-08-19 22:00:25',
                'updated_at' => '2023-08-19 22:00:25',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'SkillID' => 6,
                'Nombre' => 'History',
            'Descripcion' => 'Your Intelligence (History) check measures your ability to recall lore about historical events, legendary people, ancient kingdoms, past disputes, recent wars, and lost civilizations.',
                'HabilidadID' => 4,
                'created_at' => '2023-08-19 22:00:26',
                'updated_at' => '2023-08-19 22:00:26',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'SkillID' => 7,
                'Nombre' => 'Insight',
            'Descripcion' => 'Your Wisdom (Insight) check decides whether you can determine the true intentions of a creature, such as when searching out a lie or predicting someone\'s next move. Doing so involves gleaning clues from body language, speech habits, and changes in mannerisms.',
                'HabilidadID' => 6,
                'created_at' => '2023-08-19 22:00:27',
                'updated_at' => '2023-08-19 22:00:27',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'SkillID' => 8,
                'Nombre' => 'Intimidation',
            'Descripcion' => 'When you attempt to influence someone through overt threats, hostile actions, and physical violence, the GM might ask you to make a Charisma (Intimidation) check. Examples include trying to pry information out of a prisoner, convincing street thugs to back down from a confrontation, or using the edge of a broken bottle to convince a sneering vizier to reconsider a decision.',
                'HabilidadID' => 1,
                'created_at' => '2023-08-19 22:00:28',
                'updated_at' => '2023-08-19 22:00:28',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'SkillID' => 9,
                'Nombre' => 'Investigation',
            'Descripcion' => 'When you look around for clues and make deductions based on those clues, you make an Intelligence (Investigation) check. You might deduce the location of a hidden object, discern from the appearance of a wound what kind of weapon dealt it, or determine the weakest point in a tunnel that could cause it to collapse. Poring through ancient scrolls in search of a hidden fragment of knowledge might also call for an Intelligence (Investigation) check.',
                'HabilidadID' => 4,
                'created_at' => '2023-08-19 22:00:29',
                'updated_at' => '2023-08-19 22:00:29',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'SkillID' => 10,
                'Nombre' => 'Medicine',
            'Descripcion' => 'A Wisdom (Medicine) check lets you try to stabilize a dying companion or diagnose an illness.',
                'HabilidadID' => 6,
                'created_at' => '2023-08-19 22:00:30',
                'updated_at' => '2023-08-19 22:00:30',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'SkillID' => 11,
                'Nombre' => 'Nature',
            'Descripcion' => 'Your Intelligence (Nature) check measures your ability to recall lore about terrain, plants and animals, the weather, and natural cycles.',
                'HabilidadID' => 4,
                'created_at' => '2023-08-19 22:00:31',
                'updated_at' => '2023-08-19 22:00:31',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'SkillID' => 12,
                'Nombre' => 'Perception',
            'Descripcion' => 'Your Wisdom (Perception) check lets you spot, hear, or otherwise detect the presence of something. It measures your general awareness of your surroundings and the keenness of your senses. For example, you might try to hear a conversation through a closed door, eavesdrop under an open window, or hear monsters moving stealthily in the forest. Or you might try to spot things that are obscured or easy to miss, whether they are orcs lying in ambush on a road, thugs hiding in the shadows of an alley, or candlelight under a closed secret door.',
                'HabilidadID' => 6,
                'created_at' => '2023-08-19 22:00:32',
                'updated_at' => '2023-08-19 22:00:32',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'SkillID' => 13,
                'Nombre' => 'Performance',
            'Descripcion' => 'Your Charisma (Performance) check determines how well you can delight an audience with music, dance, acting, storytelling, or some other form of entertainment.',
                'HabilidadID' => 1,
                'created_at' => '2023-08-19 22:00:33',
                'updated_at' => '2023-08-19 22:00:33',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'SkillID' => 14,
                'Nombre' => 'Persuasion',
            'Descripcion' => 'When you attempt to influence someone or a group of people with tact, social graces, or good nature, the GM might ask you to make a Charisma (Persuasion) check. Typically, you use persuasion when acting in good faith, to foster friendships, make cordial requests, or exhibit proper etiquette. Examples of persuading others include convincing a chamberlain to let your party see the king, negotiating peace between warring tribes, or inspiring a crowd of townsfolk.',
                'HabilidadID' => 1,
                'created_at' => '2023-08-19 22:00:35',
                'updated_at' => '2023-08-19 22:00:35',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'SkillID' => 15,
                'Nombre' => 'Religion',
            'Descripcion' => 'Your Intelligence (Religion) check measures your ability to recall lore about deities, rites and prayers, religious hierarchies, holy symbols, and the practices of secret cults.',
                'HabilidadID' => 4,
                'created_at' => '2023-08-19 22:00:36',
                'updated_at' => '2023-08-19 22:00:36',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'SkillID' => 16,
                'Nombre' => 'Sleight of Hand',
            'Descripcion' => 'Whenever you attempt an act of legerdemain or manual trickery, such as planting something on someone else or concealing an object on your person, make a Dexterity (Sleight of Hand) check. The GM might also call for a Dexterity (Sleight of Hand) check to determine whether you can lift a coin purse off another person or slip something out of another person\'s pocket.',
                'HabilidadID' => 3,
                'created_at' => '2023-08-19 22:00:37',
                'updated_at' => '2023-08-19 22:00:37',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'SkillID' => 17,
                'Nombre' => 'Stealth',
            'Descripcion' => 'Make a Dexterity (Stealth) check when you attempt to conceal yourself from enemies, slink past guards, slip away without being noticed, or sneak up on someone without being seen or heard.',
                'HabilidadID' => 3,
                'created_at' => '2023-08-19 22:00:38',
                'updated_at' => '2023-08-19 22:00:38',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'SkillID' => 18,
                'Nombre' => 'Survival',
            'Descripcion' => 'The GM might ask you to make a Wisdom (Survival) check to follow tracks, hunt wild game, guide your group through frozen wastelands, identify signs that owlbears live nearby, predict the weather, or avoid quicksand and other natural hazards.',
                'HabilidadID' => 6,
                'created_at' => '2023-08-19 22:00:39',
                'updated_at' => '2023-08-19 22:00:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}