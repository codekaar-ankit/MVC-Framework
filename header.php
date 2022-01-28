<?php
session_start();
include "Helpers/UrlHelper.php";
include "Model/User.php";
use Helper\UrlController\UrlHelper;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url =  new UrlHelper();
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
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
                <a href="<?= $url->getBaseUrl() ?>" class="nav-item nav-link active"><i class="fal fa-home"></i></a>
                <a href="#" class="nav-item nav-link"><i class="fas fa-address-card"></i></a>
                <a href="<?= $url->getBaseUrl() ?>" class=" nav-link"><i class="fas fa-user text-primary"></i></a>
                <a href="<?= $url->getViewUrl("registration.php")?>" class="nav-link"><i class="fas fa-user-plus text-warning"></i></a>
            </div>
            <form class="d-flex ms-auto" action="<?= $url->getControllerUrl("UserController.php") ?>" method="post">
                <input type="hidden" name="action" value="logout">
<!--                <input type="text" class="form-control me-sm-2" placeholder="Search">-->
                <button type="submit" class="btn btn-outline-light" value=""/><i class="fas fa-sign-out-alt"></i></button>
            </form>
        </div>
    </div>
</nav>

<?php if ($_SESSION['message']): ?>
<?php if ($_SESSION['message']['type'] === false): ?>
    <div class="messageShow">
        <div class="alert alert-danger alert-dismissible fade show messageShow" role="alert">
            <strong>Hello buddy! <?= $_SESSION['message']['displayMessage1'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php else: ?>
    <div class="alert alert-success alert-dismissible fade show messageShow" role="alert">
        <strong>Hello buddy! <?= $_SESSION['message']['displayMessage'] ?> </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php $_SESSION['message'] = null; ?>
<?php endif; ?>
<main class="min-vh-100">
