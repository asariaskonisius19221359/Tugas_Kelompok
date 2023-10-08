<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class KategoriController extends BaseController
{

        public function tampil() {
            $data['kategori'] = $this()->KategoriModel->getAll();
            // Tampilkan view dengan data kategori
            $this()->load->view('kategori/index', $data);
        }

        public function form() {
            // Tampilkan view form untuk input data kategori
            $this()->load->view('kategori/form');
        }

        public function tambah() {
            $data = array(
                'email' => $this()->input->post('email'),
                'kategori' => $this()->input->post('kategori'),
                'kode_ddc' => $this()->input->post('kode_ddc')
            );

            $this()->KategoriModel->insert($data);
            redirect('kategori/tampil');
        }

        public function update($id) {
            $data = array(
                'email' => $this()->input->post('email'),
                'kategori' => $this()->input->post('kategori'),
                'kode_ddc' => $this()->input->post('kode_ddc')
            );

            $this()->KategoriModel->update($id, $data);
            redirect('kategori/tampil');
        }

        public function hapus($id) {
            $this()->KategoriModel->delete($id);
            redirect('kategori/tampil');
        }
}
