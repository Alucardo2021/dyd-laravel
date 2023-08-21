<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CondicionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('condicion')->delete();
        
        \DB::table('condicion')->insert(array (
            0 => 
            array (
                'CondicionID' => 1,
                'Nombre' => 'Blinded',
                'Descripcion' => '- A blinded creature can\'t see and automatically fails any ability check that requires sight.- Attack rolls against the creature have advantage, and the creature\'s attack rolls have disadvantage.',
                'created_at' => '2023-08-19 20:29:00',
                'updated_at' => '2023-08-19 20:29:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'CondicionID' => 2,
                'Nombre' => 'Charmed',
                'Descripcion' => '- A charmed creature can\'t attack the charmer or target the charmer with harmful abilities or magical effects.- The charmer has advantage on any ability check to interact socially with the creature.',
                'created_at' => '2023-08-19 20:29:02',
                'updated_at' => '2023-08-19 20:29:02',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'CondicionID' => 3,
                'Nombre' => 'Deafened',
                'Descripcion' => '- A deafened creature can\'t hear and automatically fails any ability check that requires hearing.',
                'created_at' => '2023-08-19 20:29:03',
                'updated_at' => '2023-08-19 20:29:03',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'CondicionID' => 4,
                'Nombre' => 'Exhaustion',
                'Descripcion' => 'Some special abilities and environmental hazards, such as starvation and the long-term effects of freezing or scorching temperatures, can lead to a special condition called exhaustion. Exhaustion is measured in six levels. An effect can give a creature one or more levels of exhaustion, as specified in the effect\'s description.1 - Disadvantage on ability checks2 - Speed halved3 - Disadvantage on attack rolls and saving throws4 - Hit point maximum halved5 - Speed reduced to 06 - DeathIf an already exhausted creature suffers another effect that causes exhaustion, its current level of exhaustion increases by the amount specified in the effect\'s description.A creature suffers the effect of its current level of exhaustion as well as all lower levels. For example, a creature suffering level 2 exhaustion has its speed halved and has disadvantage on ability checks.An effect that removes exhaustion reduces its level as specified in the effect\'s description, with all exhaustion effects ending if a creature\'s exhaustion level is reduced below 1.Finishing a long rest reduces a creature\'s exhaustion level by 1, provided that the creature has also ingested some food and drink.',
                'created_at' => '2023-08-19 20:29:04',
                'updated_at' => '2023-08-19 20:29:04',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'CondicionID' => 5,
                'Nombre' => 'Frightened',
                'Descripcion' => '- A frightened creature has disadvantage on ability checks and attack rolls while the source of its fear is within line of sight.- The creature can\'t willingly move closer to the source of its fear.',
                'created_at' => '2023-08-19 20:29:05',
                'updated_at' => '2023-08-19 20:29:05',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'CondicionID' => 6,
                'Nombre' => 'Grappled',
            'Descripcion' => '- A grappled creature\'s speed becomes 0, and it can\'t benefit from any bonus to its speed.- The condition ends if the grappler is incapacitated (see the condition).- The condition also ends if an effect removes the grappled creature from the reach of the grappler or grappling effect, such as when a creature is hurled away by the thunderwave spell.',
                'created_at' => '2023-08-19 20:29:07',
                'updated_at' => '2023-08-19 20:29:07',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'CondicionID' => 7,
                'Nombre' => 'Incapacitated',
                'Descripcion' => '- An incapacitated creature can\'t take actions or reactions.',
                'created_at' => '2023-08-19 20:29:09',
                'updated_at' => '2023-08-19 20:29:09',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'CondicionID' => 8,
                'Nombre' => 'Invisible',
                'Descripcion' => '- An invisible creature is impossible to see without the aid of magic or a special sense. For the purpose of hiding, the creature is heavily obscured. The creature\'s location can be detected by any noise it makes or any tracks it leaves.- Attack rolls against the creature have disadvantage, and the creature\'s attack rolls have advantage.',
                'created_at' => '2023-08-19 20:29:10',
                'updated_at' => '2023-08-19 20:29:10',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'CondicionID' => 9,
                'Nombre' => 'Paralyzed',
            'Descripcion' => '- A paralyzed creature is incapacitated (see the condition) and can\'t move or speak.- The creature automatically fails Strength and Dexterity saving throws.- Attack rolls against the creature have advantage.- Any attack that hits the creature is a critical hit if the attacker is within 5 feet of the creature.',
                'created_at' => '2023-08-19 20:29:11',
                'updated_at' => '2023-08-19 20:29:11',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'CondicionID' => 10,
                'Nombre' => 'Petrified',
            'Descripcion' => '- A petrified creature is transformed, along with any nonmagical object it is wearing or carrying, into a solid inanimate substance (usually stone). Its weight increases by a factor of ten, and it ceases aging.- The creature is incapacitated (see the condition), can\'t move or speak, and is unaware of its surroundings.- Attack rolls against the creature have advantage.- The creature automatically fails Strength and Dexterity saving throws.- The creature has resistance to all damage.- The creature is immune to poison and disease, although a poison or disease already in its system is suspended, not neutralized.',
                'created_at' => '2023-08-19 20:29:13',
                'updated_at' => '2023-08-19 20:29:13',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'CondicionID' => 11,
                'Nombre' => 'Poisoned',
                'Descripcion' => '- A poisoned creature has disadvantage on attack rolls and ability checks.',
                'created_at' => '2023-08-19 20:29:14',
                'updated_at' => '2023-08-19 20:29:14',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'CondicionID' => 12,
                'Nombre' => 'Prone',
                'Descripcion' => '- A prone creature\'s only movement option is to crawl, unless it stands up and thereby ends the condition.- The creature has disadvantage on attack rolls.- An attack roll against the creature has advantage if the attacker is within 5 feet of the creature. Otherwise, the attack roll has disadvantage.',
                'created_at' => '2023-08-19 20:29:15',
                'updated_at' => '2023-08-19 20:29:15',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'CondicionID' => 13,
                'Nombre' => 'Restrained',
                'Descripcion' => '- A restrained creature\'s speed becomes 0, and it can\'t benefit from any bonus to its speed.- Attack rolls against the creature have advantage, and the creature\'s attack rolls have disadvantage.- The creature has disadvantage on Dexterity saving throws.',
                'created_at' => '2023-08-19 20:29:16',
                'updated_at' => '2023-08-19 20:29:16',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'CondicionID' => 14,
                'Nombre' => 'Stunned',
            'Descripcion' => '- A stunned creature is incapacitated (see the condition), can\'t move, and can speak only falteringly.- The creature automatically fails Strength and Dexterity saving throws.- Attack rolls against the creature have advantage.',
                'created_at' => '2023-08-19 20:29:17',
                'updated_at' => '2023-08-19 20:29:17',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'CondicionID' => 15,
                'Nombre' => 'Unconscious',
            'Descripcion' => '- An unconscious creature is incapacitated (see the condition), can\'t move or speak, and is unaware of its surroundings.- The creature drops whatever it\'s holding and falls prone.- The creature automatically fails Strength and Dexterity saving throws.- Attack rolls against the creature have advantage.- Any attack that hits the creature is a critical hit if the attacker is within 5 feet of the creature.',
                'created_at' => '2023-08-19 20:29:18',
                'updated_at' => '2023-08-19 20:29:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}