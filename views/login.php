<?php

/** @var $model User */

use models\User;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../public/images/logo_dark_mode.ico" type="image/x-icon"/>
    <title>Sign in | Fitter</title>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id"
          content="410475989444-2f0aoqqc9sdhmqn7n88n9n9j87hmdqno.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <style type="text/css">
        <?php include 'login.css'; ?>
        <?php include 'header.css'; ?>
    </style>
</head>

<body>
<div class="container">
    <main>
        <?php  $form = \core\form\Form::begin("login_form","post")?>
            <h1 class="login_title"> Log In to Your Fitter Account</h1>
            <div class="new_user">
                <span>Don't have an account?</span>
                <a href="/register" class="signup_link">Sign Up</a>
            </div>
            <div class="container_login">
                <?php echo $form->field($model, 'email') ?>
                <?php echo $form->field($model, 'password')->passwordField() ?>

                <section class="options">
                    <div>
                        <input class="remember_checkbox" id="remember_me" type="checkbox" name="remember_me">
                        <label class="remember_label" for="remember_me">
                            Remember Me
                        </label>
                    </div>
                    <div class="forgot_pass">
                        <a href="../Register/register.html">Forgot Password?</a>
                    </div>
                </section>

                <section class="button_container" type="submit">
                    <button  class="login_button">
                            Log In
                    </button>
                </section>

                <section class="TOS">
                    *By logging in, you agree to our <a href="#">Terms of Use</a> and to receive
                    Fitter emails & updates and acknowledge that you read our <a href="#"> Privacy Policy.</a>
                    You also acknowledge that Fitter uses cookies to give the best user experience.
                </section>
            </div>
        <?php \core\form\Form::end()?>
    </main>
</div>
</body>

</html>

<!--client ID 410475989444-2f0aoqqc9sdhmqn7n88n9n9j87hmdqno.apps.googleusercontent.com-->
<!--client secret ZRPIpryA2ZYOjmOalCrFrvGc-->