<?php include "utils/header.php";?>
<?php include "utils/alerts.php";?>


<main class="form-signin m-3 d-flex justify-content-center ">
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
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Bienvenue sur ce projet</h5>
                <p class="card-text">Pour avec accès aux fonctionnalités du site, je vous invite à vous connectez</p>
                <p class="btn btn-primary">id : visiteur</p>
                <p class="btn btn-primary">mdp : visiteur</p>
            </div>
        </div>
</main>


<?php include "utils/footer.php";?>