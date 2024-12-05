<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function simpan() {
        $db=db_connect();
        $data =$this->request->getPost();
        $db->table('pelanggaran4')->insert($data);
        return redirect()->to('home/laporan');
    }
    public function laporan() {
        $db=db_connect();
        $query =$db->query("SELECT * FROM pelanggaran4");
        $data['data'] =$query->getResultArray();
        return view('laporan',$data);
    }
    
}
