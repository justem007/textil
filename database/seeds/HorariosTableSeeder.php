<?php

use Illuminate\Database\Seeder;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horarios')->insert(
//            [
//                'horario' => 'de 08:00-hrs ás 10:00-hrs',
//                'description' => 'Você escolheu o horário acima, favor conferir o horário agendado.',
//            ]
//            [
//                'horario' => 'de 10:00-hrs ás 12:00-hrs',
//                'description' => 'Você escolheu o horário acima, favor conferir o horário agendado.',
//            ]
//            [
//                'horario' => 'de 13:00-hrs ás 15:00-hrs',
//                'description' => 'Você escolheu o horário acima, favor conferir o horário agendado.',
//            ]
            [
                'horario' => 'de 15:00-hrs ás 17:00-hrs',
                'description' => 'Você escolheu o horário acima, favor conferir o horário agendado.',
            ]
        );
    }
}
