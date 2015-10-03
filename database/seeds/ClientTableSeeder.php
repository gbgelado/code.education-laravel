<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \ProjetoGabge\Client::truncate();
        factory(\ProjetoGabge\Client::class, 10)->create();
    }
}