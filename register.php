<?php include "./utils/header.php"?>
<?php include "./utils/alerts.php"?>

<div class="form-signin m-3 d-flex justify-content-center ">
    <form action="/process/process_register.php" method="POST">
        <h1 class="h3 mb-3 fw-normal">Register</h1>

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

    <div class="form-signin m-3 d-flex justify-content-center ">
        <form action="/process/process_login.php" method="POST">

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

<?php include "./utils/footer.php" ?>
