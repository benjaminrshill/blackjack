<?php

/**
 * Create a deck of 52 cards
 *
 * @return array
 */
function createDeck() : array {
    $ranks = [['2', 2], ['3', 3], ['4', 4], ['5', 5], ['6', 6], ['7', 7], ['8', 8], ['9', 9], ['10', 10], ['J', 10], ['Q', 10], ['K', 10], ['A', 11]];
    $suits = ['<span class="black">♠</span>', '<span class="red">♥</span>', '<span class="red">♦</span>', '<span class="black">♣</span>'];
    foreach ($suits as $suit) {
        foreach ($ranks as $rank) {
            $newPack[] = array('rank'=>$rank[0], 'value'=>$rank[1], 'suit'=>$suit);
        }
    }
    return $newPack;
}

/**
 * Take a player's cards, concatenate suit and rank, return cards (e.g. clubs 5, hearts King)
 *
 * @param   array   player
 * @return  string
 */
function playerCards(array $player) : string {
    return '<span>' . $player[0]['suit'] . $player[0]['rank'] . '</span> <span>' . $player[1]['suit'] . $player[1]['rank'] . '</span>';
}

/**
 * Take a player's cards and calculate their score
 *
 * @param   array   player
 * @return  int
 */
function playerScore(array $player) : int {
    return $player[0]['value'] + $player[1]['value'];
}

/**
 * Compare players' scores and calculate bust, draw, or win
 *
 * @param   int     player1Score
 * @param   int     player2Score
 * @return  string
 */
function whoWins(int $player1Score, int $player2Score) : string {
    if ($player1Score > 21 || $player2Score > 21) {
        return ($player1Score > 21 && $player2Score > 21 ? "Both bust!"
            : ($player1Score > 21 ? "Player one bust! Two wins!"
                : "Player two bust! One wins!"));
    } elseif ($player1Score === $player2Score) {
        return "Draw!";
    } elseif ($player1Score > $player2Score) {
        return "Player one wins!";
    } else {
        return "Player two wins!";
    }
}

// Create deck, shuffle pack, deal 2 cards to each player, calculate scores
$pack = createDeck();
shuffle($pack);
$player1 = [array_pop($pack), array_pop($pack)];
$player2 = [array_pop($pack), array_pop($pack)];
$player1Score = playerScore($player1);
$player2Score = playerScore($player2);

?>