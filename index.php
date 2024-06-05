<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>The Conqueror - Create your own Bundle</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Import Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <?php $cards = require_once 'config/cards.php'; ?>
        <?php require_once 'components/header.php'; ?>

        <main>
            <div class="container block cards-container">

                <h1 class="title">Create your own Bundle</h1>

                <div class="sort">
                    <label for="sortBy">Sort by:</label>
                    <select name="sortBy" id="sortBy">
                        <optgroup label="Sort method">
                            <option>Distance (shortest)</option>
                            <option>Distance (longest)</option>
                            <option selected>Popular</option>
                            <option>Release date</option>
                        </optgroup>
                    </select>
                </div>

                <div class="cards-grid">

                    <?php foreach ($cards as $id => $card) { ?>
                        <a href="#action" class="card" id="card_<?php echo $id; ?>" title="Mount Kilimanjaro" style="background-image: linear-gradient(180deg, rgba(255,255,255,0) 0%,
                            rgba(255,255,255,0) 15%, rgb(255, 255, 255) 30%), url('<?php echo $card['background']; ?>');" onclick="addBundle(<?php echo $id; ?>)">
                            <div class="card-header">
                                <img src="<?php echo $card['image']; ?>" alt="card-1-img" class="card-image">
                            </div>
                            <div class="card-content">
                                <p class="card-title"><?php echo $card['title']; ?></p>
                                <p class="card-text card-distance"><?php echo $card['distance']; ?></p>
                                <p class="card-text card-postcard"><?php echo $card['postcard']; ?></p>
                                <p class="card-text card-streetview"><?php echo $card['streetview']; ?></p>
                                <div class="card-button">Add Challenge</div>
                            </div>
                        </a>

                    <?php } ?>

                </div>
            </div>

            <div id="order">
                <div class="container">
                    <form action="summary.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="bundle" value="" style="display:none;">
                        <p class="details"></p>
                    </form>
                </div>
            </div>

        </main>

        <?php require_once 'components/footer.php'; ?>

        <script src="js/script.js" async defer></script>

    </body>

</html>
