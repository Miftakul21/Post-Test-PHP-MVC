<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASE_URL; ?>/js/bootstrap.js"></script>
<script>
    $(function() {

        $('.tombolTambahData').on('click', function() {
            $('#formModalLabel').html('Tambah Data Mahasiswa');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama').val('');
            $('#nrp').val('');
            $('#email').val('');
            $('#jurusan').val('');
            $('#id').val('');
        });


        $('.tampilModalUbah').on('click', function() {

            $('#formModalLabel').html('Ubah Data Mahasiswa');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', '<?= BASE_URL; ?>/mahasiswa/ubah');

            const id = $(this).data('id');

            $.ajax({
                url: '<?= BASE_URL; ?>/mahasiswa/getubah',
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama').val(data.nama);
                    $('#nrp').val(data.nrp);
                    $('#email').val(data.email);
                    $('#jurusan').val(data.jurusan);
                    $('#id').val(data.id);
                }
            });

        });

        // tombol menambah matakul
        $('.tombolTambahDataMatkul').on('click', function() {
            $('#formModalLabel').html('Tambah Data Mata Kuliah');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#kode_matkul').val('');
            $('#nama_matkul').val('');
            $('#kelas').val('');
            $('#sks').val('');
            $('#kapasitas').val('');
            $('#peserta').val('');
            $('#waktu').val('');
            $('#id_matkul').val('');
        });

        // tombol ubah matkul
        $('.tampilModalUbahMatkul').on('click', function() {

            $('#formModalLabel').html('Ubah Data Matkul');
            $('.modal-footer button[type=submit]').html('Ubah Data Matkul');
            $('.modal-body form').attr('action', '<?= BASE_URL; ?>/matakuliah/edit');

            const id_matkul = $(this).data('id_matkul');
            
            console.log(id_matkul);
            $.ajax({
                url: '<?= BASE_URL; ?>/matakuliah/getedit',
                data: {
                    id_matkul: id_matkul
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#kode_matkul').val(data.kode_matkul);
                    $('#nama_matkul').val(data.nama_matkul);
                    $('#kelas').val(data.kelas);
                    $('#sks').val(data.sks);
                    $('#kapasitas').val(data.kapasitas);
                    $('#peserta').val(data.peserta);
                    $('#waktu').val(data.waktu);
                    $('#id_matkul').val(data.id_matkul);
                }
            });

        });

    });
</script>
</body>

</html>