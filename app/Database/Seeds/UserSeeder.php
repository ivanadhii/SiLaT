<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Data untuk tabel user
        $data = [
            [
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'nama_lengkap' => 'Administrator',
                'role' => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
                'nama_lengkap' => 'Regular User',
                'role' => 'user',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'guru',
                'email' => 'guru@example.com',
                'password' => password_hash('guru123', PASSWORD_DEFAULT),
                'nama_lengkap' => 'Guru',
                'role' => 'guru',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'siswa',
                'email' => 'siswa@example.com',
                'password' => password_hash('siswa123', PASSWORD_DEFAULT),
                'nama_lengkap' => 'Siswa',
                'role' => 'siswa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        
        // Masukkan data ke tabel user (bukan users)
        $this->db->table('user')->insertBatch($data);
        
        echo "UserSeeder executed successfully\n";
    }
}
