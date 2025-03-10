<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'email' => $this->faker->email(),
            'no_wa' => $this->faker->phoneNumber(),
            'no_rekening' =>$this->faker->creditCardNumber(),
            'jenis_bank' =>$this->faker->randomElement(['BCA', 'BNI', 'BRI', 'MANDIRI', 'BUKOPIN', 'PERMATA', 'MEGA']),
            'stt_karyawan' => mt_rand(1,2)
        ];
    }
}
