<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim'               => '0110221054',
                'nama'              => 'ica',
                'jenis_kelamin'     => 'perempuan',
                'tgl_lahir'         => '22003-07-02',
                'tempat_lahir'      => 'Rawa jitu',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.5',
                'created_at'        => Time::now()
            ],
                [
                'nim'               => '0110221052',
                'nama'              => 'zahir',
                'jenis_kelamin'     => 'Laki-Laki',
                'tgl_lahir'         => '2003-12-23',
                'tempat_lahir'      => 'Labuhan ratu',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.5',
                'created_at'        => Time::now()
                ]
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }

}
