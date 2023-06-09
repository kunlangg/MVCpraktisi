<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary text">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASEURL; ?>/index">KIP STIMATA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/index">Home</a>
                        <a class="nav-link" href="<?= BASEURL; ?>/about">Contact</a>
                        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>