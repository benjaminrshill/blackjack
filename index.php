<!DOCTYPE html>
<html>
<head>
    <title>Blackjack</title>
    <link rel="stylesheet" type="text/css" href="blackjack.css" />
</head>
<body>

<?php
    function createDeck() {
        $ranks = [['2', 2], ['3', 3], ['4', 4], ['5', 5], ['6', 6], ['7', 7], ['8', 8], ['9', 9], ['10', 10], ['J', 10], ['Q', 10], ['K', 10], ['A', 11]];
        $suits = ['♥', '♣', '♦', '♠'];
        $newPack = [];
        for ($i = 0; $i < 4; $i++) {
            array_push($newPack, $ranks);
            for ($j = 0; $j < 13; $j++) {
                array_push($newPack[$i][$j], $suits[$i]);
            }
        }
        return $fullPack = array_merge($newPack[0], $newPack[1], $newPack[2], $newPack[3]);
    }
    $pack = createDeck();
    shuffle($pack);
    $player1 = [array_pop($pack), array_pop($pack)];
    $player2 = [array_pop($pack), array_pop($pack)];
?>

<main>
    <h2>Blackjack</h2>
    <section class="cols">
        <div>
            <h4>Player 1</h4>
            <p><?php
                echo $player1[0][2] . $player1[0][0] . ' ' . $player1[1][2] . $player1[1][0];
                ?></p>
            <h3><?php
                echo $player1[0][1] + $player1[1][1];
                ?></h3>
        </div>
        <div>
            <h4>Player 2</h4>
            <p><?php
                echo $player2[0][2] . $player2[0][0] . ' ' . $player2[1][2] . $player2[1][0];
                ?></p>
            <h3><?php
                echo $player2[0][1] + $player2[1][1];
                ?></h3>
        </div>
    </section>
    <section>
        <h3><?php
            if ($player1[0][1] + $player1[1][1] === $player2[0][1] + $player2[1][1]) {
                echo "Draw!";
            } elseif ($player1[0][1] + $player1[1][1] > $player2[0][1] + $player2[1][1]) {
                echo "Player one wins!";
            } else {
                echo "Player two wins!";
            }
            ?></h3>
    </section>
</main>

</body>
</html>