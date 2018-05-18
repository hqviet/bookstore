<title>Account</title>
<!-- <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="1004441475752-kmqub6t7bigtn2rm7a3lulvtitho82p0.apps.googleusercontent.com"> -->
    <?php
    include './header.php';
    if (!isset($_SESSION['sessionUsername'])) {
        ?>

        <div class="container mr-auto ml-auto mt-5">
            <div class="text-center mb-4">
                <h2 >You need to log in first!</h2>
                <h6>or</h6>
                <h5>Sign up for a new account</h5>
            </div>
            <div class="row">
                <div class="col">
                    <form method="POST" action="./controllers/loginValidate.php">
                        <div class="form-group">
                            <h4 class="text-center border-top" style="line-height: 0.1px; margin:10px 0 20px;"><span class="bg-white pl-2 pr-2 text-secondary">Log in</span></h4>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" required placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control"  type="password" name="password" required placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="login" value="Log in">
                        </div>
                    </form>

                </div>
                <div class="col-2"></div>
                <div class="col">
                    <h4 class="text-center border-top" style="line-height: 0.1px; margin:10px 0 20px;"><span class="bg-white pl-2 pr-2 text-secondary">Sign up</span></h4>
                    <form action="../controllers/signupValidate.php" method="POST">
                        <div class="form-group">
                            <input class="form-control" type="text" name="signupEmail" required placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control"  type="password" name="signUpPassword" required placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input class="form-control"  type="password" name="reSignUpPassword" required placeholder="Password confirmation">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-info" type="submit" name="signup" value="Sign up">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <?php
    }
    else {
       ?>
       <script type="text/javascript"> window.location = "./index.php"; </script>
       <?php
   }
   ?>

   <script>
    // $('input[name="login"]').click(function() {
    //     $.ajax({
    //         url: './controllers/loginValidate.php',
    //         type: 'POST',
    //         data: {
    //             email: $('input[name="email"]').val(),
    //             password: $('input[name="password"]').val()
    //         },
    //         success: function(data) {
    //             if (parseInt(data) == 1) {
    //                 window.location = "./index.php";
    //             }
    //             else {
    //                 location.reload();
    //             }
    //         },
    //         error: function() {
    //             alert("something went wrong! please try again later!");
    //         }
    //     });
    // });
    // $('input[name="signup"]').click(function() {
    //     $.ajax({
    //         url: './controllers/signupValidate.php',
    //         type: 'POST',
    //         data: {
    //             signupEmail: $('input[name="signupEmail"]').val(),
    //             signupPassword: $('input[name="password"]').val(),
    //         },
    //         success: function(data) {
    //             alert(data);
    //             window.location = "./index.php";
    //         },
    //         error: function() {
    //             alert("something went wrong! please try again later!");
    //         }
    //     });
    // });
</script>