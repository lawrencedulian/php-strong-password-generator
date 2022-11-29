<?php
session_start();

function rndLetter($lenght)
{
    $stringPw = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890~!@#$%&*_-+=\:;>.?/';
    $password = "";

    for ($i = 0; $i < $lenght; $i++) {
        $password .= $stringPw[rand(0, strlen($stringPw) - 1)];
    }
    return $password;
}

if (isset($_GET["pwlength"])) {
    $lenght = rndLetter($_GET["pwlength"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div>
            <form action="index.php" method="GET">
                <div class="d-flex justify-content-between">
                    <label for="pwlength">Lunghezza Password:</label>
                    <input type="number" name="pwlength" id="pwlength">
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Send</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
            <?php
            if (isset($_GET["pwlength"])) {
                echo $lenght;
            }
            ?>
        </div>

    </div>
</body>

</html>