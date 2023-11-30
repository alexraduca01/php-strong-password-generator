<?php 
session_start();
if (empty($_SESSION['password'])) {
    header('Location: login.php');
    die();
}
$pass = $_SESSION['password'];

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong password generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="d-flex justify-content-center align-items-center flex-column vh-100 w-100 bg-primary">
            <p class="fs-1 text-warning">la tua password è: <?php echo $pass ?></p>
            <a href="partials/template/logout.php" class="text-white btn btn-danger text-decoration-none">Torna indietro</a>
        </div>
    </body>

</html>