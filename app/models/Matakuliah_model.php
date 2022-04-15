<?php

class Matakuliah_model 
{
    private $table = 'tbl_matakuliah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // function untuk menampilkan seluruh data mata kuliah
    public function getAllMatakuliah()
    {
        $this->db->query("SELECT * FROM ".$this->table);
        return $this->db->resultSet();
    }

    // function tambah data mahasiswa
    public function tambahDataMatkul($data)
    {
        $query = "INSERT INTO tbl_matakuliah values 
        (null, :kode_matkul, :nama_matkul, :kelas, :sks, :kapasitas, :peserta, :waktu)";

        $this->db->query($query);
        // memasukan nama filed
        $this->db->bind('kode_matkul', $data['kode_matkul']);
        $this->db->bind('nama_matkul', $data['nama_matkul']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('kapasitas', $data['kapasitas']);
        $this->db->bind('peserta', $data['peserta']);
        $this->db->bind('waktu', $data['waktu']);    
        $this->db->bind('kapasitas', $data['kapasitas']); 
        
        // eksekusi insert
        $this->db->execute();

        return $this->db->rowCount();
    }

    // function mengambil kode matkul
    public function getMatkulById($id_matkul)
    {
        $this->db->query("SELECT * FROM ".$this->table." WHERE id_matkul = :id_matkul");
        $this->db->bind('id_matkul', $id_matkul);
        return $this->db->single();
    }

    // update data matakuliah
    public function updateDataMatkul($data)
    {
        $query = "UPDATE tbl_matakuliah SET 
        kode_matkul = :kode_matkul, 
        nama_matkul = :nama_matkul, 
        kelas = :kelas, 
        sks = :sks, 
        kapasitas = :kapasitas, 
        peserta = :peserta, waktu = :waktu 
        WHERE id_matkul = :id_matkul";
        
        $this->db->query($query);
        // memasukan nama filed
        $this->db->bind('kode_matkul', $data['kode_matkul']);
        $this->db->bind('nama_matkul', $data['nama_matkul']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('kapasitas', $data['kapasitas']);
        $this->db->bind('peserta', $data['peserta']);
        $this->db->bind('waktu', $data['waktu']);    
        $this->db->bind('id_matkul', $data['id_matkul']);

        $this->db->execute();

        return $this->db->rowCount();  
    }

    public function hapusDataMatkul($id_matkul)
    {
        $query = "DELETE FROM tbl_matakuliah WHERE id_matkul = :id_matkul";
        $this->db->query($query);
        $this->db->bind('id_matkul', $id_matkul);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

}