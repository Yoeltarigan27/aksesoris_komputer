<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Aplikasi Penjualan Barang Minimarket',
            'descriptions' => 'Web ini untuk transaksi penjualan barang di minimarket',
            'author' => '2022101009 - Bagas Aditya Silalahi'
        ];
        return view('v_login/login', $data);
    }
}
