<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    ?>
    <nav class="navigation lightbg" id="navbar">
        <a class="circular-button-prefix nav__index">
            <img src="/imgs/FindThemLogo.png" alt="Icon">
        </a>
        <ul class="nav__list">
            <li class="list__item list__item--768"><a href="index.html">Index</a></li>
            <li class="list__item"><a href="#">About</a></li>
            <li class="list__item"><a href="#">Projects</a></li>
            <li class="list__item"><a href="#">Partners</a></li>
            <li class="list__item"><a href="#">Platform</a></li>
            <li class="list__item"><a href="#">Contact</a></li>
        </ul>
        <div class="nav__burgermenu" id="nav__burgermenu">
            <span></span>
        </div>
    </nav>
    <section class="sended wrapblock">
        <div class="sended__info">
            <h2>Hola, <?php echo $name ?></h2>
            <p>Se ha enviado correctamente un correo electrónico a <?php echo $email ?> !</p>
            <a href="index.php" class="mid-large-button-prefix sinfo__btn">Go back</a>
        </div>
    </section>
    <script src="./script.js"></script>
</body>
</html>