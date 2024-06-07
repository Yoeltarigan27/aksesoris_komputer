<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function login()
    {
        $rule  = [
            'xusername' => 'required',
            'xpassword' => 'required|min_length[8]'
        ];

        $errors = [
            'xusername' => [
				'required' => 'Username Masih Kosong',
			],		
            'xpassword' => [
				'required' => 'Password Masih Kosong',
                'min_length' => 'Password Minimal 8 Karakter'
			],
        ];

        if (!$this->validate($rule, $errors)) {
            return view('v_login/login', [
                "validation" => $this->validator,
                'title' => 'Aplikasi Penjualan Barang Minimarket',
                'descriptions' => 'Web ini untuk transaksi penjualan barang di minimarket',
                'author' => '2022101009 - Bagas Aditya Silalahi'
            ]);
        }
    }
}
