<?php
$firstDate = new Datetime('16-05-2016');
$secondDate = new Datetime(date('j-m-Y'));
$interval = date_diff($firstDate, $secondDate);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <title>Exercice 5</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center bg-dark text-white">
                <div class="col-md-12">
                    <p>
                        <?= $interval->format('%R%a days')?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
