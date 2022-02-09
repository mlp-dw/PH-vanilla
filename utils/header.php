<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="
    
    ./css/responsive.css">
    <title>PRODUCT HUNT</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">

    <div class="container-fluid ">

        <div class="nav nav-pills">
            <div class="col-mb-3 text-start ">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo.jpg" alt="" width="50" height="auto" class="d-inline-block align-text-top ">
                </a>
            </div>
            <h4 class="text-start my-auto">Product hunt</h4>
            
        </div>
        <?php if(isset($_SESSION["pseudo"]))
        {?>


            <form class="d-flex" action="./process/process_search.php">
                <input type="search" id="SearchBar" name="SearchBar" placeholder="SearchBar" >
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>

            <div class="col-mb-3 text-end nav nav-pills">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">populaires</a></li>
                            <li><a class="dropdown-item" href="#">Nouveaux</a></li>
                        </ul>
                    </div>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark"  id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            languages
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="./js/filter_category.js">CSS</a></li>
                            <li><a class="dropdown-item" href="#">PHP</a></li>
                            <li><a class="dropdown-item" href="#">Javascript</a></li>
                            <li><a class="dropdown-item" href="#">Ruby</a></li>
                            <li><a class="dropdown-item" href="#">C#</a></li>
                            <li><a class="dropdown-item" href="#">Python</a></li>
                        </ul>
                    </div>
                <div class="my-auto">
                    <a href="process/process_logout.php" style="text-decoration: none;" class="link-dark"><?=$_SESSION['pseudo'] ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg></a>
                </div>


        <?php 
        } 
        ?>

            </div>
    </div>

</nav>

