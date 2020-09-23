<!DOCTYPE html>
<html>
<head>
    <title>Blackjack</title>
    <link rel="stylesheet" type="text/css" href="blackjack.css" />
</head>
<body>
<?php require 'functions.php' ?>
<main>
    <h2>Blackjack</h2>
    <section class="cols">
        <div>
            <h4>Player 1</h4>
            <p><?php echo playerCards($player1); ?></p>
            <h3><?php echo playerScore($player1); ?></h3>
        </div>
        <div>
            <h4>Player 2</h4>
            <p><?php echo playerCards($player2); ?></p>
            <h3><?php echo playerScore($player2); ?></h3>
        </div>
    </section>
    <section>
        <h3><?php echo whoWins($player1, $player2); ?></h3>
    </section>
</main>
</body>
</html>