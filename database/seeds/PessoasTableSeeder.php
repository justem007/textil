<?php

use Illuminate\Database\Seeder;

class PessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->insert(
            [
                'pessoa' => 'Pessoa Jurídica',
                'description' => 'Você escolheu o tipo de pessoa acima, favor conferir'
            ]
        );
    }
}
