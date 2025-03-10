<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jabatan>
 */
class JabatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_jabatan' => $this->faker->randomElement(['DIREKTUR UTAMA', 
                                                      'HUMAS',
                                                      'DIREKTUR KEUANGAN', 
                                                      'WAKIL DIREKTUR',
                                                      'DIREKTUR OPERASIONAL', 
                                                      'ADMIN OPERASIONAL',
                                                      'MGR HSE', 
                                                      'MGR COMMERCIAL',
                                                      'MGR OPERASIONAL', 
                                                      'MGR TEKNIKAL',
                                                      'MGR FINANCE AND ACCOUNTING', 
                                                      'MGR HR GA',
                                                      'STAFF HR CREWING', 
                                                      'FINANCE EXCTV',
                                                      'SPV ENGINEER', 
                                                      'PORT CAPT',
                                                      'HARBOR CAPTAIN',
                                                      'COMMERCIAL EXCTV', 
                                                      'SAFETY OFFICER',
                                                      'STAFF GA', 
                                                      'PORT ENGINEER',
                                                      'OPERATION EXCTV', 
                                                      'OFFICE BOY',
                                                      'RECEPTIONIS', 
                                                      'SECURITY',
                                                      'DRIVER']),
            'keterangan' => $this->faker->sentence(),
        
        ];
    }
}
