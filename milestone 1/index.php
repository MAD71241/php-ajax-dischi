<?php

require __DIR__ . "/dischi.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <!-- my CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Booldisks</title>
</head>

<body class="bg-sy-grey">
    <header class="bg-sy-lightgrey position-relative">

    </header>
    <div class="d-flex justify-content-center">
        <div class="disk-row d-flex flex-row justify-content-start">
            <?php

            foreach ($database as $disk) :

            ?>
                <div class="disk-card bg-sy-lightgrey text-center">
                    <img class="album-thumbnail" src="<?=$disk["poster"] ?>" alt="">
                    <h4 class="text-white font-weight-bold text-uppercase"><?=$disk["title"] ?></h4>
                    <h6 class="text-sy-lightergrey font-weight-bold"><?=$disk["author"] ?></h6>
                    <h6 class="text-sy-lightergrey font-weight-bold"><?=$disk["year"] ?></h6>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>