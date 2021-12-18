<?php include "../header.php" ?>
<div class="container mainRow body-content">
    <div class="container  d-flex justify-content-center bg-warning registrationDiv col-md-6">
        <form id="registrationForm" name="registerForm" action="/Practice/controller/userController.php" method="post" class="">
            <div class="mt-3 mb-4 text-center display-5">
                <label class="font-weight-bold">Please input your Details</label>
            </div>
            <input type="hidden" name="action" value="register">
            <div class="row common">
                <input type="text" name="firstName" class="form-control" placeholder="First Name" id="firstName">
            </div>
            <div class="row common">
                <input type="text" name="lastName" class="form-control" placeholder="Last Name" id="lastName">
            </div>
            <div class="row common">
                <input type="email" name="emailId" class="form-control" placeholder="Email ID" id="emailId">
            </div>
            <div class="row common">
                <input type="date" name="birthDate" class="form-control" placeholder="Date of Birth" id="birthDate">
            </div>
            <div class="common">
                <div class="form-check-inline">
                    <label class="gender" for="gender">
                        Gender:
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="male">
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="female">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
            </div>
            <div class="row common">
                <input type="password" name="pass"  class="form-control" placeholder="Password" id="pass">
            </div>
            <div class="row common">
                <input type="text" name="postDetails" class="form-control" placeholder="Post" id="postDetails">
            </div>
            <div class="d-flex buttonsRow justify-content-around ">
                <input type="submit" class="btn btn-success form-control" role="button" value="Submit" />
<!--                    <a class="btn btn-info form-control" id="resetButton"  onsubmit="validate()" href="#" role="reset">Reset</a>-->
                </div>
            </div>
        </form>
    </div>
</div>

<style>
    .common {
        margin: 10px 0 10px;
    }
    .buttonsRow {
        margin: 1.5rem 1rem 1rem;
    }
    .registrationDiv {
        margin-top: 10%;
        border: 2px solid;
    }
    .body-content {
        min-height: calc(100vh - 30px);
    }
</style>

<script>
    $(document).ready (function () {
        $("#registrationForm").validate(
            {
                rules: {
                    firstName: "required",
                    lastName: "required",
                    emailId: {
                        required: true,
                        email: true
                    },
                    birthDate: "required",
                    flexRadioDefault: "required",
                    pass: "required",
                    postDetails: "required",
                }
            }
        );
    });
</script>

<?php include "../footer.php" ?>