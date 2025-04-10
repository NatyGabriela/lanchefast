<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome'=> 'Cliente Exemplo',
            'endereco'=> 'Rua Exemplo, 123',
            'telefone'=> '119999999',
            'cpf' => '12345678901',
            'email'=> 'cliente@example.com',
            'senha' => bcrypt('senha123')
        ]);
    
        Cliente::create([
            'nome'=> 'Cliente Exemplo2',
            'endereco'=> 'Rua Exemplo2, 123',
            'telefone'=> '219999999',
            'cpf' => '35677654231',
            'email'=> 'ema@example.com',
            'senha' => bcrypt('senha123')
        ]); 
    }

    
    
}
