<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo_dark_mode.ico" type="image/x-icon"/>
</head>

<body>
<header class="menu_bar">
    <div class="button_and_logo">
        <a href="/" class="site-logo">
            <img src="../images/logo_dark_mode.png" alt="logo">
        </a>
        <a href="/login" class="menu_button">Login</a>
    </div>
    <nav class="menu">
        <ul role="menu">
            <li role="menuitem">
                <a href="../Leaderboard/leaderboard.html">Leaderboard</a>
            </li>
            <li role="menuitem">
                <a href="../News/News.html">News</a>
            </li>
            <li role="menuitem">
                <a href="../AboutUs/about_us.html">About Us</a>
            </li>
            <li role="menuitem">
                <a href="../Support/support.html">Contact</a>
            </li>
        </ul>
    </nav>
</header>
<?php if (\core\Application::$app->session->getFlash('success')): ?>
<div class="alert alert-success">
    <?php echo \core\Application::$app->session->getFlash('success')?>
</div>
<?php endif?>
{{content}}