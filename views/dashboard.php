<?php

use DatabaseModel\User;

include "../header.php";
User::redirectIfNotLoggedIn();
?>

<div class="body-content">
    <div class="container d-flex justify-content-center">
        <form class="form-control dashboardForm" action="<?= $url->getControllerUrl("DashboardController.php") ?>" method="post" >
            <div>
                <h2><label class="d-flex justify-content-center mt-4"> CRUD Form </label></h2>
            </div>
            <div class="container row mt-2">
                <input type="text" class="queryText form-control" name="crQuery" placeholder="Please input query?" value="" />
            </div>
            <input type="hidden" name="actionQuery" value="">
            <div class="mt-4 mb-4">
                <input type="submit" class="btn btn-primary insertButton" name="actionQuery" value="Insert" />
                <input type="submit" class="btn btn-secondary updateButton" name="actionQuery" value="Update" />
                <input type="submit" class="btn btn-warning deleteButton" name="actionQuery" value="Delete" />
                <input type="submit" class="btn btn-info selectButton" name="actionQuery" value="Select" />
            </div>
            <div>
                <textarea id="reviewData" name="reviewData" rows="4" cols="50">

                </textarea>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready (function () {
        $(".dashboardForm").validate(
            {
                rules: {
                    crQuery: "required",
                }
            }
        );

    });
</script>

<style>

    .body-content {
        text-align: center;
    }
    .dashboardForm {
        background-color: aliceblue;
        margin-top: 27% !important;
    }
    .messageShow {
        margin-top: 4% !important;
        text-align: center !important;
    }
</style>

<?php include "../footer.php"; ?>

