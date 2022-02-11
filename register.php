<?php include "./utils/header.php"?>
<?php include "./utils/alerts.php"?>

<div class="nav nav pills">
    <div class="card m-auto my-3 mb-5 " style="box-shadow: 25px; max-width:270px;">
        <div class="form-signin m-3 d-flex justify-content-center ">
            <form action="process/process_log.php" method="POST">
                <h1 class="h3 mb-3 fw-normal">Inscription</h1>

                <div class="m-2">
                    <label for="message">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo">
                </div>

                <div class="m-2">
                    <label for="message">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="d-flex justify-content-center">
                    <button class="w-30 btn btn-lg btn-primary" type="submit">Envoyer</button>
                </div>

            </form>
        </div>
    </div>

    <div class="card m-auto my-3 mb-5 " style="box-shadow: 25px; max-width:270px;">
        <div class="form-signin m-3 d-flex justify-content-center ">
            <form action="process/process_login.php" method="POST">

                <h1 class="h3 mb-3 fw-normal">Connexion</h1>

                <div class="m-2">
                    <label for="message">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo">
                </div>

                <div class="m-2">
                    <label for="message">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>


                <div class="d-flex justify-content-center">
                    <button class="w-30 btn btn-lg btn-primary" type="submit">Envoyer</button>
                </div>
            
            </form>
        </div>
    </div>
</div>

<?php include "./utils/footer.php" ?>
