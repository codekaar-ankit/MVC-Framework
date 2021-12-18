<?php
session_start();
include "Helpers/UrlHelper.php";
$url =  new UrlHelper;
?>
<!DOCTYPE HTML>
<html>
<head>
    <link href="<?= $url->getCSSUrL("style.css")?>" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbarMenuMain bg-dark">
    <div class="container-fluid navbarMenu">
        <a href="#" class="navbar-brand">Codekaar</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active"><i class="fal fa-home"></i></a>
                <a href="#" class="nav-item nav-link"><i class="fas fa-address-card"></i></a>
                <a href="/Practice/index.php" class=" nav-link"><i class="fas fa-user text-primary"></i></a>
                <a href="/Practice/views/registration.php" class="nav-link"><i class="fas fa-user-plus text-warning"></i></a>
            </div>
            <form class="d-flex ms-auto">
                <input type="text" class="form-control me-sm-2" placeholder="Search">
                <button type="submit" class="btn btn-outline-light">Search</button>
            </form>
        </div>
    </div>
</nav>
<?php if ($_SESSION['message'] || $_SESSION['user']): ?>
    <?php if ($_SESSION['message']['type'] === false): ?>
    <div class="messageShow">
        <div class="alert alert-danger alert-dismissible fade show messageShow" role="alert">
            <strong>Holy buddy!</strong> Please login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <?php elseif ($_SESSION['user']['type'] === false): ?>
            <div class="alert alert-info alert-dismissible fade show messageShow" role="alert">
                <strong>Holy buddy!</strong> Please login as you already have account with us.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <?php else: ?>
        <div class="alert alert-success alert-dismissible fade show messageShow" role="alert">
            <strong>Holy buddy!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
<?php session_unset();
session_destroy(); ?>
<?php endif; ?>