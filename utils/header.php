<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../PRODUCT-HUNT-main/css/responsive.css">
    <title>PRODUCT HUNT</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Product hunt
        </a>
        <h1>Bienvenue <?= $_SESSION["pseudo"]?></h1>
            <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorie
                    </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Les plus populaires</a></li>
                    <li><a class="dropdown-item" href="#">Les plus recents</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <?php if(isset($_SESSION["pseudo"])){?>
                        <li><a href="process/process_logout.php" class="dropdown-item">Deconnecter vous</a></li>
                        <?php } 
                     ?>
                </ul>
            </div>

            <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Les languages
                    </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">CSS</a></li>
                    <li><a class="dropdown-item" href="#">PHP</a></li>
                    <li><a class="dropdown-item" href="#">Javascript</a></li>
                    <li><a class="dropdown-item" href="#">Ruby</a></li>
                    <li><a class="dropdown-item" href="#">C#</a></li>
                    <li><a class="dropdown-item" href="#">Python</a></li>


                </ul>
            </div>
    </div>
</nav>
