<?php 
session_start();
include __DIR__ . '/partials/helpers/functions.php';

$error = passGen();

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
        <div class="bg-primary vh-100 w-100 d-flex justify-content-center flex-column">
            <div class="pt-5">
                <h1 class="text-center">Strong Password Generator</h1>
                <h2 class="text-center text-white">Genera una password sicura</h2>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
                    <label for="passLength" class="text-white">Lunghezza password:</label>
                    <input type="number" name="passLength" id="passLength" min="3" max="20">
                    <button type="submit" class="btn btn-success">Invio</button>
                </form> 
            </div>
        </div>
    </body>

</html>