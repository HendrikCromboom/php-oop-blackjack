<?php
include 'ClassLibrary/Card.php';
include 'ClassLibrary/Deck.php';
include 'ClassLibrary/Suit.php';
include 'ClassLibrary/Game.php';
include 'ClassLibrary/Player.php';
include 'ClassLibrary/Opponent.php';

//Start of Game Flow
$game = new Game("start"); //For now start is a string, maybe add a property of a class later
$game->shuffle(); //Shuffles the deck of this game
$player = new Player();// Create a player
$opponent = new Opponent();
foreach ($game->getCards() AS $card) {// Until the player has 2 cards in hand we draw cards and hand them to the player
    if($player->countHand()<3){
        $game->drawCard();
        $player->addToHand($card);
    }else{
        break;
    }
}
//foreach($deck->getCards() AS $card) {
  //  echo $card->getUnicodeCharacter(true);
//}