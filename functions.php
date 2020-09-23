<?php

/**
 * Creates a deck of 52 cards
 *
 * @return array
 */
function createDeck() {
    $ranks = [['2', 2], ['3', 3], ['4', 4], ['5', 5], ['6', 6], ['7', 7], ['8', 8], ['9', 9], ['10', 10], ['J', 10], ['Q', 10], ['K', 10], ['A', 11]];
    $suits = ['♠', '♥', '♦', '♣'];
    foreach ($suits as $suit) {
        foreach ($ranks as $rank) {
            $newPack[] = array('rank'=>$rank[0], 'value'=>$rank[1], 'suit'=>$suit);
        }
    }
    return $newPack;
}

/**
 * Takes a player's cards and concatenates suit and rank
 *
 * @param   array   player
 * @return  string
 */
function playerCards($player) {
    return $player[0]['suit'] . $player[0]['rank'] . ' ' . $player[1]['suit'] . $player[1]['rank'];
}

/**
 * Takes a player's cards and calculates their score
 *
 * @param   array   player
 * @return  integer
 */
function playerScore($player) {
    return $player[0]['value'] + $player[1]['value'];
}

/**
 * Calculates a winner
 *
 * @param   array   player1
 * @param   array   player2
 * @return  string
 */
function whoWins($player1, $player2) {
    $player1Score = $player1[0]['value'] + $player1[1]['value'];
    $player2Score = $player2[0]['value'] + $player2[1]['value'];
    if ($player1Score === $player2Score) {
        return "Draw!";
    } elseif ($player1Score > 21 || $player2Score > 21) {
        return ($player1Score > 21 && $player2Score > 21 ? "Both bust!"
            : ($player1Score > 21 ? "Player one bust! Two wins!"
                : "Player two bust! One wins!"));
    } elseif ($player1Score > $player2Score) {
        return "Player one wins!";
    } else {
        return "Player two wins!";
    }
}

// Create deck, shuffle pack, deal 2 cards to each player
$pack = createDeck();
shuffle($pack);
$player1 = [array_pop($pack), array_pop($pack)];
$player2 = [array_pop($pack), array_pop($pack)];

?>