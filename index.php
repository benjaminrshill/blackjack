<!DOCTYPE html>
<html>
<head>
    <title>Blackjack</title>
    <link rel="stylesheet" type="text/css" href="blackjack.css" />
</head>
<body>
<?php require 'functions.php' ?>
<main>
    <header>Blackjack</header>
    <section class="cols">
        <div>
            <h4>Player 1</h4>
            <h2><?php echo playerCards($player1); ?></h2>
            <h1><span><?php echo playerScore($player1); ?></span></h1>
        </div>
        <div>
            <h4>Player 2</h4>
            <h2><?php echo playerCards($player2); ?></h2>
            <h1><span><?php echo playerScore($player2); ?></span></h1>
        </div>
    </section>
    <section>
        <h5><?php echo whoWins($player1Score, $player2Score); ?></h5>
    </section>
</main>
</body>
</html>