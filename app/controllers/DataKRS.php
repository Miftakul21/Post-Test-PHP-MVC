<?php

class DataKRS extends Controller 
{
    public function index()
    {
        $data['judul'] = 'Data KRS Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('datakrs/index', $data);
        $this->view('templates/footer');
    }

    // pada tombol detail akan ditampilkan matakuliah yang diambil
    public function detail($id_mhs)
    {
        $data['judul'] = 'Data KRS';
        $data['title_heading'] = 'Kartu Rencana Studi';
        // untuk men groub mahasiswa yang mengambil data
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id_mhs);
        // untuk mengambil data hasil krs
        $data['data_krs'] = $this->model('Mahasiswa_model')->getDataKRS($id_mhs);
        $this->view('templates/header', $data);
        $this->view('datakrs/detail', $data);
        $this->view('templates/footer');
    }
}