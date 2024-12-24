<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SoftcasesModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function daftarSoftcase(){
        $softcaseModel =  new SoftcasesModel();

        $data['softcases'] = $softcaseModel->findAll();

        return view('admin/daftar-softcase', $data);
    }

    public function daftarSoftcaseTambah(){
        return view('admin/daftar-softcase-tambah');
    }

    public function createSoftcase(){
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if (!$file->hasMoved()){
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        $softcaseModel = model('SoftcaseModel');

        if ($softcaseModel->insert($data, false)) {
            return redirect()->to('admin/daftar-softcase')->with('Berhasil', 'Data berhasil disimpan!');
        } else {
            return redirect()->to('admin/daftar-softcase')->with('gagal', 'Data gagal disimpan!');
        }
    }

    public function daftarsoftcaseEdit(){
        return view('admin/daftar-softcase-edit');
    }

    public function daftarSoftcaseHapus(){
        return view('admin/daftar-softcase-hapus');
    }

    public function transaksi(){
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus(){
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus(){
        return view('admin/transaksi-hapus');
    }

    public function pelanggan(){
        return view('admin/pelanggan');
    }

    public function pelangganHapus(){
        return view('admin/pelanggan-hapus');
    }
}