<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['nome' => 'Python']);
        Tipo::create(['nome' => 'PHP']);
        Tipo::create(['nome' => 'JavaScript']);
        Tipo::create(['nome' => 'Laravel']);
        Tipo::create(['nome' => 'HTML & CSS']);
    }
}
