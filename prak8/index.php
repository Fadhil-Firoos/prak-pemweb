<?php
include 'konek.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <title>FAOSS || Index</title>
</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <nav>
                <ul>
                    <li><a href="?page=home">Home</a><hr></li>
                    <li><a href="?page=formulir">Formulir</a><hr></li>
                    <li><a href="?page=tabel">Tabel</a><hr></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="container">
        
        <?php
          $page = @$_GET['page'];
          if (file_exists($page.'.php')) {
            include $page.'.php';
          }else {
            include 'home.php';
          }
          ?>
    </section>
    <footer class="container">
        <div class="footer">
            <div class="logo_fot">
                <img src="img/logo.png" alt="Logo_fot">
            </div>
            <div class="copy_right">
                <p>&copy; Copyright Fadhil Firoos 2023</p>
            </div>
        </div>
    </footer>
</body>
</html>