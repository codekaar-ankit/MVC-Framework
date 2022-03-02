<?php use DatabaseModel\User;

include "../header.php";

    (new DatabaseModel\User)->isLogedin();
?>

    <div class="mainRow body-content">
        <div class="container d-flex justify-content-center">
            <form action="/MVC-Framework/Controller/UserController.php" id="loginForm" method="post" class="formLogin form-control">
                <div>
                    <h2><label class="d-flex justify-content-center mt-2"> Login Form </label></h2>
                </div>
                <div class="d-flex justify-content-center mt-1">
                    <span class="text-info"> New to here <a class="text-warning fst-bolder" href="<?= $url->getViewUrl("registration.php") ?>" role="button">Sign Up for Free</a></span>
                </div>
                <input type="hidden" name="action" value="login">
                <div class="row container mt-5">
                    <div class="loginText">
                        <input type="text" name="username" placeholder="Enter Username" class="form-control" id="username" />
                    </div>
                    <div class="loginText mt-4">
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password" />
                    </div>
                </div>
                <div class="container mt-4 mb-3">
                    <input type="submit" role="button" class="btn btn-secondary loginButton" value="LOG IN" />
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
            margin-top: 22%;
            /*width: 36%;*/
        }
        .loginText {
            display: flex;
            justify-content: center;
        }
        body {
            background-image: url(<?= $url->getImageUrl("background.jpg")?>);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .loginButton {
            margin-left: 17px;
            width: 95%;
        }

        .messageShow {
            margin-top: 4% !important;
            text-align: center !important;
        }
    </style>

<?php include "../footer.php" ?>