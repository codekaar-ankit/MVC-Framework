<?php include "header.php" ?>
<div class="mainRow body-content">
    <div class="container d-flex justify-content-center">
        <form action="/Practice/controller/userController.php" id="loginForm" method="post" class="formLogin">
            <h2><span class="d-flex justify-content-center mt-2"> Login Form </span></h2>
            <div class="d-flex justify-content-center mt-1">
                    <span class="text-info"> New to here <a class="text-warning fst-bolder" href="views/registration.php" role="button">Sign Up for Free</a>
                    </span>
            </div>
            <input type="hidden" name="action" value="login">
            <div class="row container mt-5">
                <div class="loginText">
                    <input type="text" name="username" placeholder="Enter Username" class="form-control" id="username">
                </div>
                <div class="loginText mt-4">
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
                </div>
            </div>
            <div class="container mt-4 mb-3">
                <div class="">
                    <input type="submit" class="btn btn-secondary loginButton" value="LOG IN" />
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready (function () {
        $("#loginForm").validate(
            {
                rules: {
                    username: {
                        required: true,
                        email: true
                    },
                    password: "required",
                }
            }
        );

    });
</script>

<style>
    .formLogin {
        background-color: aliceblue;
        margin-top: 15%;
        /*width: 36%;*/
    }
    .loginText {
        display: flex;
        justify-content: center;
    }
    .bg-img{
        background-image: url("views/assets/images/background.jpg");
        height: 100vh;
        min-width: fit-content;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    body {
        background-image: url(<?=$url->getImageUrl("background.jpg")?>);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .loginButton {
        margin-left: 14px;
        width: 90%;
    }
    .body-content {
        min-height: calc(100vh - 30px);
    }
</style>

<?php include "footer.php" ?>