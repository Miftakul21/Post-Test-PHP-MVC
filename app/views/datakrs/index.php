<div class="container" style="margin-top: 2rem;">
    <div class="row">
        <div class="col-lg-6">
            <h3 ><?= $data['judul']; ?></h3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASE_URL; ?>/datakrs/detail/<?= $mhs['id'];  ?> " class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>      
        </div>
    </div>
</div>