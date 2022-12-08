<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 20; $i++) { 
            $client = new Client();
            $client->client = 'Nome Cliente'.$i;
            $client->address = 'Indirizzo'.$i;
            $client->number = rand(1, 22);
            $client->city = 'Città'.$i;
            $client->province = 'Gorizia';
            $client->cap = rand(11111, 99999);
            $client->p_iva = 1234567890 . $i;
            $client->reference = 'Nome Referente'.$i;
            $client->contact = 123456789 . $i;
            $client->save();
        }
    }
}
