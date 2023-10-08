<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil() {
        return view('anggota/tampil');
    }

    public function form(){
        return view('anggota/form');
    }


    
    public function tambah(){
        $m = new AnggotaModel();
        return $m->insert([
            'email' =>request()->getvar('email'),
            'katasandi' => request()->getvar('katasandi'),
            'nama_lengkap' => request()->getvar('nama_lengkap'),
            'alamat' => request()->getvar('alamat'),
            
        ]);

    }

    public function update(){
        $data = array([
            'email' => $this()->input->post('email'),
            'katasandi' => $this()->input->post('katasandi'),
            'nama_lengkap' => $this()->input->post('nama_lengkap'),
            'alamat' => $this()->input->post('alamat')
        
        ]);

    }

    public function hapus($id) {
        $this()->AnggotaModel->delete($id);
        redirect('anggota/tampil');
    }
}
