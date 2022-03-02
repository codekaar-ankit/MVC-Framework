
<?php include "header.php" ?>



<div class="mainRow body-content">
    <div class="container d-flex justify-content-center">
        <h1>Welcome to our website</h1>

        If you wan to login please  <a href=" <?= $url->getViewUrl("login.php") ?>" > click here</a>

    </div>
</div>

<style>
    .mainRow{
        margin-top: 9%;
    }

    body {
        background-image: url(<?= $url->getImageUrl("download.jpeg")?>);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
    <?php include "footer.php" ?>
