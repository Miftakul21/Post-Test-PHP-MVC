<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $table2 = 'detail';
    private $table3 = 'tbl_matakuliah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // function untuk melihat data krs yang diambil mahasiswa
    public function getDataKRS($id)
    {
        // query untuk mengambil bebrapa data dari table mahasiswa, tbl_matakuliah, dan data
        // yang mana data hasil pengambilan id mahasiswa dan kode matakuliah
        $this->db->query('SELECT a.nama, a.nrp, a.jurusan, a.email, b.kode_matkul, b.nama_matkul, b.kelas, b.sks, b.kapasitas, b.peserta, b.waktu FROM '. $this->table. ' AS a INNER JOIN '. $this->table2.' AS c ON a.id = c.id_mhs LEFT JOIN '. $this->table3. ' AS b ON b.kode_matkul = c.kode_matkul WHERE a.id =:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa
                    VALUES
                (null, :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
