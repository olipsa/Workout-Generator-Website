<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        <?php include 'register.css'; ?>
    </style>
    <link rel="shortcut icon" href="../images/logo_dark_mode.ico" type="image/x-icon"/>
    <title>Register | Fitter</title>
</head>

<body>
<div class="container">
    <header class="menu_bar">
        <div class="button_and_logo">
            <a href="/homepage" class="site-logo">
                <img src="../images/logo_dark_mode.png" alt="logo">
            </a>
                <a href="../Homepage/homepage.html" class="menu_button">Home</a>
        </div>
    </header>
    <main>
        <?php  $form = \core\form\Form::begin("register_form","post")?>
            <?php echo $form->field($model, 'email') ?>
            <?php echo $form->field($model, 'pass') ?>
            <?php echo $form->field($model, 'confirmPass') ?>
        <?php \core\form\Form::end()?>
        <form class="register_form" method="post">
            <h1 class="register_title"> Create Your Fitter Account</h1>
            <div class="old_user">
                <span>Already have an account?</span>
                <a href="../Login/login.html" class="signin_link">Sign In</a>
            </div>
            <div class="container_register">
                <section class="email_input_container">
                    <label>
                        <input class="email_input" type="email" name="email" placeholder="Email Address">
                    </label>
                </section>

                <section class="pass_input_container">
                    <label>
                        <input class="pass_input" type="password" name="pass" placeholder="Password">
                    </label>
                </section>

                <section class="pass_confirm_input_container">
                    <label>
                        <input class="pass_confirm_input" type="password" name="confirmPass"
                               placeholder="Confirm Password">
                    </label>
                </section>

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
        </form>
    </main>
</div>
</body>

</html>