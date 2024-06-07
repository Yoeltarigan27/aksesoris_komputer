<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data =[
            'fullname' => 'Bagas Aditya Silalahi',
            'username' => 'Bagas@gmail.com',
            'password' => password_hash('12345678',PASSWORD_BCRYPT),
            'level_id' => '1',
            'active' => 'Y'
        ];
        $this->db->table('tbluser')->insertBatch($data);
    }
}
