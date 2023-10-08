<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BukuController extends BaseController
{
    public function tampil() {
        $data['buku'] = $this()->BukuModel->getAll();
        // Tampilkan view dengan data buku
        $this()->load->view('buku/index', $data);
    }

    public function form() {
        // Tampilkan view form untuk input data buku
        $this()->load->view('buku/form');
    }

    public function tambah() {
        $data = array(
            'judul' => $this()->input->post('judul'),
            'edisi' => $this()->input->post('edisi'),
            'cetakan' => $this()->input->post('cetakan'),
            'sinopsis' => $this()->input->post('sinopsis'),
            'tb_kategori_id' => $this()->input->post('tb_kategori_id'),
            'tb_penerbit_id' => $this()->input->post('tb_penerbit_id'),
            'isbn' => $this()->input->post('isbn'),
            'penulis' => $this()->input->post('penulis')
        );

        $this()->BukuModel->insert($data);
        redirect('buku/tampil');
    }

    public function update($id) {
        $data = array(
            'judul' => $this()->input->post('judul'),
            'edisi' => $this()->input->post('edisi'),
            'cetakan' => $this()->input->post('cetakan'),
            'sinopsis' => $this()->input->post('sinopsis'),
            'tb_kategori_id' => $this()->input->post('tb_kategori_id'),
            'tb_penerbit_id' => $this()->input->post('tb_penerbit_id'),
            'isbn' => $this()->input->post('isbn'),
            'penulis' => $this()->input->post('penulis')
        );

        $this()->BukuModel->update($id, $data);
        redirect('buku/tampil');
    }

    public function hapus($id) {
        $this()->BukuModel->delete($id);
        redirect('buku/tampil');
    }
}
