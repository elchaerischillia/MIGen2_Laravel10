<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\Consultation;
use Illuminate\Support\Facades\DB;

class ConsultationSeeder extends Seeder
{
    public function run()
    {
        // create data here
        $consultation = [
            [
                'name' => 'Jantung Sesak',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tekanan Darah Tinggi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Gangguan Irama Jantung',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert the $consultation array into the 'consultation' table
        Consultation::insert($consultation);
    }
}