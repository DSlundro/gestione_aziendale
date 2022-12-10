<?php

namespace Database\Seeders;

use App\Models\ClientType;
use Illuminate\Database\Seeder;

class ClientTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new ClientType();
        $type->name = 'privato';
        $type->save();

        $type = new ClientType();
        $type->name = 'azienda';
        $type->save();
    }
}
