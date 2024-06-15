<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Untree.co" />
  <link rel="shortcut icon" href="favicon.png" />

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="/freeuser/fonts/icomoon/style.css" />
  <link rel="stylesheet" href="/freeuser/fonts/flaticon/font/flaticon.css" />

  <link rel="stylesheet" href="/freeuser/css/tiny-slider.css" />
  <link rel="stylesheet" href="/freeuser/css/aos.css" />
  <link rel="stylesheet" href="/freeuser/css/style.css" />

  <title>Property &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>

<body>
  <?php echo view('layout/header'); ?>

  <section class="section">
    <div class="container">
      <div class="row">
        <?php foreach ($profil as $data): ?>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title"><?= $data['judul'] ?></h5>
                <p class="card-text"><?= $data['keterangan'] ?></p>
                <p class="card-text"><?= $data['deskripsi'] ?></p>
                <p class="card-text"><small class="text-muted"><?= date('d M Y', strtotime($data['tgl_dibuat'])) ?></small></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <script src="/freeuser/js/bootstrap.bundle.min.js"></script>
  <script src="/freeuser/js/tiny-slider.js"></script>
  <script src="/freeuser/js/aos.js"></script>
  <script src="/freeuser/js/navbar.js"></script>
  <script src="/freeuser/js/counter.js"></script>
  <script src="/freeuser/js/custom.js"></script>
</body>
</html>
