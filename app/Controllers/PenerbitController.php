<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenerbitModel;

class PenerbitController extends BaseController
{
    public function tampil() {
        $data['penerbit'] = $this()->PenerbitModel->getAll();
        // Tampilkan view dengan data penerbit
        $this()->load->view('penerbit/index', $data);
    }

    public function form() {
        // Tampilkan view form untuk input data penerbit
        $this()->load->view('penerbit/form');
    }

    public function tambah() {
        $data = array(
            'penerbit' => $this()->input->post('penerbit'),
            'kota' => $this()->input->post('kota')
        );

        $this()->PenerbitModel->insert($data);
        redirect('penerbit/tampil');
    }

    public function update($id) {
        $data = array(
            'penerbit' => $this()->input->post('penerbit'),
            'kota' => $this()->input->post('kota')
        );

        $this()->PenerbitModel->update($id, $data);
        redirect('penerbit/tampil');
    }

    public function hapus($id) {
        $this()->PenerbitModel->delete($id);
        redirect('penerbit/tampil');
    }
}
