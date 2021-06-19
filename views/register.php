<?php

/** @var $model User */

use models\User;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        <?php include '../public/css/register.css'; ?>
        <?php include '../public/css/header.css'; ?>
    </style>
    <title>Register | Fitter</title>
</head>
<body>
    <main>
        <?php  $form = \core\form\Form::begin("register_form","post")?>
        <h1 class="register_title"> Create Your Fitter Account</h1>
        <div class="old_user">
            <span>Already have an account?</span>
            <a href="/login" class="signin_link">Sign In</a>
        </div>
        <div class="container_register">
            <?php echo $form->field($model, 'email') ?>
            <?php echo $form->field($model, 'password')->passwordField() ?>
            <?php echo $form->field($model, 'confirmPass')->passwordField() ?>
            <section class="button_container" type="submit">
                <button class="register_button">
                    Register
                </button>
            </section>
            <section class="TOS">
                *By registering, you agree to our <a href="#">Terms of Use</a> and to receive
                Fitter emails & updates and acknowledge that you read our <a href="#"> Privacy Policy.</a>
                You also acknowledge that Fitter uses cookies to give the best user experience.
            </section>
        </div>
        <?php \core\form\Form::end()?>
    </main>
</div>
</body>

</html>