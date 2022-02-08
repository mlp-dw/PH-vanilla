<?php include "./utils/header.php"?>

    <?php include "./utils/alerts.php"?>
    <div class="card mx-auto my-5"style="width: 18rem">
        <div class="card-header">
            Register
        </div>
        <div class="card-body mx-auto">
            <form action="process/process_log.php" method="POST">
            <label for="pseudo"></label>
            <input class="m-1 mx-auto" type="text" placeholder="Enter your pseudo" name="pseudo">
            <label for="password"></label>
            <input class="m-1 " type="password" placeholder="Enter your password" name="password">
            <button type="submit" class="btn btn-light mx-auto m-3">Entrer</button>
            </form>
        </div>
    </div>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include "./utils/footer.php" ?>
