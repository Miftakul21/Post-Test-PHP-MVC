<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Halaman <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= BASE_URL; ?>">PHP MVC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav m-auto">
          <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= BASE_URL; ?>/mahasiswa">Mahasiswa</a>
          <a class="nav-item nav-link" href="<?= BASE_URL; ?>/matakuliah">Mata Kuliah</a>
          <a class="nav-item nav-link" href="<?= BASE_URL; ?>/datakrs">Data</a>          
        </div>
      </div>
    </div>
  </nav>