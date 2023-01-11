<?php

namespace App\Controllers;

use App\Models\Proses;

class Home extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        return view('landing');
    }

    public function post_kehadiran()
    {
        $data = [
            'nama' => $_POST['nama'],
            'pesan' => $_POST['pesan'],
            'konfirmasi' => $_POST['konfirmasi_kehadiran'],
        ];
        $insert_data =  $this->db->table('konfirmasi_kehadiran')->insert($data);
        if ($insert_data == true) {
            $acc = true;
        } else {
            $acc = false;
        }
        $data = [
            'acc' => $acc
        ];
        echo json_encode($insert_data);
    }
}
