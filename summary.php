<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>The Conqueror - Order Summary</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Import Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <?php require_once 'components/header.php'; ?>

        <main>
            <div class="container block cards-container">

                <h1 class="title">Order Summary</h1>

                <div class="cards-table">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        if (isset($_POST['bundle'])) {

                            $sum = 0;
                            $cardsString = $_POST['bundle'];
                            $cards = require_once 'config/cards.php';
                            $cardIds = explode(',', $cardsString);
                            $currency = null;

                            foreach ($cardIds as $index => $cardId) {
                                $card = $cards[$cardId];
                                $sum += $card['price'];
                                $currency = $card['currency']; ?>

                                <div class="card card-order">
                                    <div class="card-header">
                                        <img src="<?php echo $card['image'] ?>" alt="">
                                    </div>
                                    <div class="card-content text-left">
                                        <p class="card-title"><?php echo $card['title']; ?></p>
                                        <p class="card-text card-distance"><?php echo $card['distance']; ?></p>
                                        <p class="card-text card-postcard"><?php echo $card['postcard']; ?></p>
                                        <p class="card-text card-streetview"><?php echo $card['streetview']; ?></p>
                                    </div>
                                    <div class="card-price">
                                        <p><span class="price"><?php echo $card['price']; ?></span> <?php echo $currency ?></p>
                                    </div>
                                </div>

                            <?php   } ?>
                            <div class="card card-order order-total">
                                <div class="card-content">
                                    <p class="card-title">TOTAL</p>
                                </div>
                                <div class="card-price">
                                    <p><span class="price"><?php echo $sum; ?></span> <?php echo $currency; ?></p>
                                </div>
                            </div>
                            <form action="" method="POST" class="card card-order">
                                <button class="order-now">ORDER NOW</button>
                            </form>

                    <?php
                        } else {
                            header('Location: index.php');
                        }
                    } else {
                        header('Location: index.php');
                    } ?>
                </div>
            </div>
        </main>

        <?php require_once 'components/footer.php'; ?>

        <script src=" js/script.js" async defer>
        </script>

    </body>

</html>
