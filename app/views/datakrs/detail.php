<div class="container mt-5">
    <a href="<?= BASE_URL; ?>/datakrs" class="btn btn-danger">Kembali</a>
    <h3 class="text-center mt-3"><?= $data['title_heading']; ?></h3>
    <div class="info">
        <h5>Nama    : <?= $data['mhs']['nama']; ?></h5>
        <h5>Nrp     : <?= $data['mhs']['nrp']; ?></h5>    
        <h5>Email   : <?= $data['mhs']['email']; ?></h5>
        <h5>Jurusan : <?= $data['mhs']['jurusan']; ?></h5>
    </div>
</div>

<div class="container mt-3">
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama Matakuliah</th>
                <th scope="col">Kelas</th>
                <th scope="col">SKS</th>
                <th scope="col">Kapasitas</th>
                <th scope="col">Peserta</th>                
                <th scope="col">Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['data_krs'] as $data_krs): ?>
            <tr>
                <td><?= $data_krs['kode_matkul']; ?></td>
                <td><?= $data_krs['nama_matkul']; ?></td>                
                <td><?= $data_krs['kelas']; ?></td>
                <td><?= $data_krs['sks']; ?></td>
                <td><?= $data_krs['kapasitas']; ?></td>
                <td><?= $data_krs['peserta']; ?></td>
                <td><?= $data_krs['waktu']; ?></td>               
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>