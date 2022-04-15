<?php

class Matakuliah extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Mata Kuliah";
        // ambil data matakuliah dari model
        $data['matakuliah'] = $this->model('Matakuliah_model')->getAllMatakuliah();
        $this->view('templates/header', $data);
        $this->view('matakuliah/index', $data);        
        $this->view('templates/footer');
    }

    // kirim flash / notifikasi tambah dari model tambah
    public function tambah()
    {
        if($this->model('Matakuliah_model')->tambahDataMatkul($_POST) > 0){
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location:'.BASE_URL.'/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location:'.BASE_URL.'/matakuliah');
            exit;
        }
    }
    
    // function untuk mengubah ke json untuk mengupdate 
    // menggunakan jquery
    public function getedit()
    {
        echo json_encode($this->model('Matakuliah_model')->getMatkulById($_POST['id_matkul']));
    }

    // kirim flash / notifikasi edit dari model matakuliah
    public function edit()
    {
        if($this->model('Matakuliah_model')->updateDataMatkul($_POST) > 0){
            Flasher::setFlash('berhasil','diupdate','success');
            header('Location:'.BASE_URL.'/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal','diupdate','danger');
            header('Location:'.BASE_URL.'/matakuliah');
            exit;
        }
    }

    // function untuk hapus
    public function hapus($id_matkul)
    {
        if( $this->model('Matakuliah_model')->hapusDataMatkul($id_matkul) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/matakuliah');
            exit;
        }
    }



}