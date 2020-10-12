<?php
include 'ClassLibrary/Card.php';
include 'ClassLibrary/Deck.php';
include 'ClassLibrary/Suit.php';
include 'ClassLibrary/Game.php';
include 'ClassLibrary/Player.php';
include 'ClassLibrary/Opponent.php';
include 'ClassLibrary/GameState.php';

//Start of Game Flow
if(!isset($_SESSION["gameState"])){
    $gameState = new GameState();
    echo "not found";
}
else{
    $gameState = $_SESSION["gameState"];
}
if($gameState->getGameState() == "start"){
$game = new Game("start"); //For now start is a string, maybe add a property of a class later
$game->shuffle(); //Shuffles the deck of this game
$player = new Player();// Create a player
$opponent = new Opponent();
$gameState->drawPlayer();

}
else{
    $game = $_SESSION["game"];
    $player = $_SESSION["player"];
    $gameState = $_SESSION["gameState"];
    $opponent = $_SESSION["opponent"];
}
if($gameState->getGameState() == "drawPlayer"){

    foreach ($game->getCards() AS &$card) {// Until the player has 2 cards in hand we draw cards and hand them to the player

        if($player->countHand()<2){
            $game->drawCard();
            $player->addToHand($card);
            echo $player->countHand();


        }else{
          break;

        }
    }
    $gameState->drawOpponent();
}
if($gameState->getGameState() == "drawOpponent") {
    foreach ($game->getCards() as $card) {// Until the opponent has 2 cards in hand we draw cards and hand them to the player
        if ($opponent->countHand() < 3) {
            $game->drawCard();
            $opponent->addToHand($card);
        } else {
            break;
        }
    }
    $gameState->optionsPlayer();
}
if($gameState->getGameState() == "optionsPlayer"){
    if($player->getTotal() > 21){
        $gameState ->optionsOpponent();
    }
    if($player->getChoice() == "hit"){
        echo "drawing isnt implemented yet";// drawingfunction
    }
    elseif ($player->getChoice() == "pass"){
        $gameState ->optionsOpponent();
    }
    else{
        echo "something went wrong with the Player Choice Incursion";
    }
}
if($gameState->getGameState() == "optionsPlayer"){
    echo "AI isnt just ready yet";
    $gameState ->declareWinner();
}
if($gameState->getGameState() == "declareWinner"){
    echo "someone won";
    $gameState ->restart();
}
