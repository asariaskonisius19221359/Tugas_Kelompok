<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PeminjamanModel;

class PeminjamanController extends BaseController
{
    public function form() {
        // Tampilkan view form untuk input data koleksibuku
        $this()->load->view('koleksibuku/form');
    }

    public function tambah() {
        $data = array(
            'tb_buku_id' => $this()->input->post('tb_buku_id'),
            'nomor_koleksi' => $this()->input->post('nomor_koleksi'),
            'status_koleksi' => $this()->input->post('status_koleksi')
        );

        $this()->KoleksiBukuModel->insert($data);
        redirect('koleksibuku/tampil');
    }

    public function update($id) {
        $data = array(
            'tb_buku_id' => $this()->input->post('tb_buku_id'),
            'nomor_koleksi' => $this()->input->post('nomor_koleksi'),
            'status_koleksi' => $this()->input->post('status_koleksi')
        );

        $this()->KoleksiBukuModel->update($id, $data);
        redirect('koleksibuku/tampil');
    }

    public function hapus($id) {
        $this()->KoleksiBukuModel->delete($id);
        redirect('koleksibuku/tampil');
    }
}
