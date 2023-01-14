<?php

namespace App\Controllers;

use App\Models\Proses;

class Home extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->db = \Config\Database::connect();
        helper('tanggal');
    }
    public function index()
    {
        return view('landing');
    }

    public function post_kehadiran()
    {
        $data = [
            'nama' => $_POST['nama'],
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

    public function post_ucapan()
    {
        $data = [
            'nama' => $_POST['nama'],
            'ucapan' => $_POST['ucapan'],
        ];
        $insert_data =  $this->db->table('ucapan')->insert($data);
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
    public function get_ucapan()
    {
        $ucapan =  $this->db->table('ucapan')->select("*")->where("deleted_at is null")->orderBy("id", "DESC")->get()->getResultArray();
        $data = [
            'ucapan' => $ucapan
        ];
        return view('ucapan', $data);
    }
}
