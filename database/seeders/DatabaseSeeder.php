<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bongkaran;
use App\Models\Muatan;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        Bongkaran::factory(6)->create();
        Barang::factory(6)->create();

        Muatan::create([
            'kode_muatan' => 330,
            'nama_sopir' => 'Jarwo Puput',
            'barang' => 'Mie Instan',
            'telepon' => '62818272821',
            'alamat' => 'Kudus',
        ]);

        Muatan::create([
            'kode_muatan' => 341,
            'nama_sopir' => 'Haji Sodik',
            'barang' => 'Coca Cola',
            'telepon' => '6281729912',
            'alamat' => 'Semarang',
        ]);

        Muatan::create([
            'kode_muatan' => 352,
            'nama_sopir' => 'Gading Yoyok',
            'barang' => 'Sabun Mandi',
            'telepon' => '628135711877',
            'alamat' => 'Demak',
        ]);

        Muatan::create([
            'kode_muatan' => 363,
            'nama_sopir' => 'Kartono Wawan',
            'barang' => 'Es Krim',
            'telepon' => '6282135711877',
            'alamat' => 'Demak',
        ]);
        Muatan::create([
            'kode_muatan' => 374,
            'nama_sopir' => 'Ika Laraswati',
            'barang' => 'Shampoo',
            'telepon' => '6282135711877',
            'alamat' => 'Demak',
        ]);
        Muatan::create([
            'kode_muatan' => 385,
            'nama_sopir' => 'Erna Istantina',
            'barang' => 'Kopi Sachet',
            'telepon' => '6282135711877',
            'alamat' => 'Demak',
        ]);

    
        
    }
}
