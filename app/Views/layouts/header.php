<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title><?= $title ?></title>
  </head>
  <body >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg">
        <div class="d-flex w-100 flex-row ">
            <a class="navbar-brand ms-5" href="/">Blog Apps</a>
            <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == '' ? 'active' : ''; ?>" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'about' ? 'active' : ''; ?>" aria-current="page" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'post' ? 'active' : ''; ?>" aria-current="page" href="/post">Posts</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>