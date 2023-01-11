<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bongkaran>
 */
class BongkaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'muatan_id' => mt_rand(1,6),
            'kode_bongkaran' => fake()->numerify('######'),
            'nama_sopir' => fake()->name(),
            'tanggalbongkar' => fake()->date(),
            'alamat' => fake()->address(),
        ];
    }
}
