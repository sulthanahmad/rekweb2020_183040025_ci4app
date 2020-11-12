<?php

namespace App\Database\Seeds;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'nama'      => 'sulthan',
            'alamat'    => 'margahayu raya'
        ];

        // Simple Queries
        $this->db->query(
            "INSERT INTO orang (nama, alamat) VALUES(:nama:, :alamat:)",
            $data
        );

        // Using Query Builder
        // $this->db->table('users')->insert($data);
    }
}
