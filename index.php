<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <!-- header -->
    <header>
        <img src="img/logo.png" alt="">
    </header>
    <main>
        <div class="container-cards">   
            <?php
            include_once './data.php';
            foreach ($arrdisc as $element){?>
                <div class="card">
                    <img class="card-img">
                        <img src="<?= $element['poster']; ?>" alt="<?= $element['title']; ?>" />
                    </img>
                    <h2><?= $element['title']; ?></h2>
                    <p><?= $element['author']; ?></p>
                    <p><?= $element['year']; ?></p>
                </div>

            <?php }?>
        </div>
    </main>
</body>
</html>