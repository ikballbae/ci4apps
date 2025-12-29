<?php

namespace App\Controllers;

class ProdukController extends BaseController
{
    public function index()
    {
        $produkModel = new \App\Models\ProdukModel();

        $produk = $produkModel->findAll();
        $data = [
            'title' => 'Produk',
            'produk' => $produk
        ];

        return view('pages/produk', $data);
    }

    public function detail($kode){
        $produkModel = new \App\Models\ProdukModel();

        $detail = $produkModel->where('kode', $kode)->first();
        $data = [
            'title' => 'Detail',
            'detail' => $detail
        ];
        return view('pages/detail', $data);
    }

    public function input(){
        $data = [
            'title' => 'Input Produk',
        ];
        return view('pages/input', $data);
    }

    public function simpan(){
        $produkmodel = new \App\Models\ProdukModel();
        $data = [
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $this->request->getVar('gambar'),
        ];
        $produkmodel->insert($data);
        return redirect()->to('/pages/produk');
    }

    public function edit($kode){
        $produkmodel = new \App\Models\ProdukModel();
        $detail = $produkmodel->find($kode);
        $data = [
            'title' => 'Edit Produk',
            'detail' => $detail
        ];
        return view('pages/edit', $data);
    }

    public function update(){
        $produkmodel = new \App\Models\ProdukModel();
        $data = [
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $this->request->getVar('gambar'),
        ];
        $produkmodel->save($data);
        session()->setFlashdata('pesan', 'Data ' . $data['kode'] . ' berhasil diupdate.');
        return redirect()->to('/pages/produk');
    }
    
    public function delete($kode){
        $produkmodel = new \App\Models\ProdukModel();
        $produkmodel->delete($kode);
        session()->setFlashdata('pesan', 'Data ' . $kode . ' berhasil dihapus.');
        return redirect()->to('/pages/produk');
    }
}