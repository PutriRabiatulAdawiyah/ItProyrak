<!-- bagian awal file header -->
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

  <title>
    Property &mdash; Free Bootstrap 5 Website Template by Untree.co
  </title>
</head>

<body>
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <a href="/index" class="logo m-0 float-start">Property</a>
                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li><a href="<?= base_url('/'); ?>">Home</a></li>
                    <li><a href="<?= base_url('properties'); ?>">Properties</a></li>
                    <li><a href="/about">About</a></li>
                    <li class="active"><a href="/contact">Contact Us</a></li>
                    <?php foreach ($profil as $data): ?>
                        <li><a href="#"><?= $data['judul'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
    <div class="side-new mr3">
        <a href="adminlogin" class="btn btn-primary py-2 px-3">LOGIN</a>
    </div>
</nav>
