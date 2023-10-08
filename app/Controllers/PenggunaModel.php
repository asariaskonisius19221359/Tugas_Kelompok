<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class PenggunaController extends BaseController {

    public function tampil() {
        $data['pengguna'] = $this()->PenggunaModel->getAll();
        // Tampilkan view dengan data pengguna
        $this()->load->view('pengguna/index', $data);
    }

    public function form() {
        // Tampilkan view form untuk input data pengguna
        $this()->load->view('pengguna/form');
    }

    public function tambah() {
        $data = array(
            'email' => $this()->input->post('email'),
            'nama_lengkap' => $this()->input->post('nama_lengkap'),
            'tingkat' => $this()->input->post('tingkat'),
            'kata_sandi' => $this()->input->post('kata_sandi')
        );

        $this()->PenggunaModel->insert($data);
        redirect('pengguna/tampil');
    }

    public function update($id) {
        $data = array(
            'email' => $this()->input->post('email'),
            'nama_lengkap' => $this()->input->post('nama_lengkap'),
            'tingkat' => $this()->input->post('tingkat'),
            'kata_sandi' => $this()->input->post('kata_sandi')
        );

        $this()->PenggunaModel->update($id, $data);
        redirect('pengguna/tampil');
    }

    public function hapus($id) {
        $this()->PenggunaModel->delete($id);
        redirect('pengguna/tampil');
    }
}