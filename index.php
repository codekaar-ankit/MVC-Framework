
<?php include "header.php" ?>

<div class="mainRow body-content">
    <div class="container d-flex justify-content-center">
        <h1 class="welcomeMessage">Welcome to our website</h1>
        <span class="wantLogin">
            If you wan to login please  <a class="loginLink" href=" <?= $url->getViewUrl("login.php") ?>" > click here</a>
        </span>
    </div>
</div>

<style>
    .mainRow{
        margin-top: 9%;
    }
    body {
        background-image: url(<?= $url->getImageUrl("code.jpg")?>);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .wantLogin {
        font-size: 20px;
        color: aliceblue
    }
    .loginLink {
        color: chartreuse;
    }
    .welcomeMessage {
        color: cornsilk;
    }
</style>
    <?php include "footer.php" ?>
