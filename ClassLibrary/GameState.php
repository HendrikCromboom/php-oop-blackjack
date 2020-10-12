<?php

declare(strict_types=1);

Class GameState{
    private string $gameState;

    public function __construct()
    {
        $this->gameState = "start";
    }

    function drawPlayer(){
        $this->gameState = "drawPlayer";
    }
    function drawOpponent(){
        $this->gameState = "drawOpponent";
    }
    function optionsPlayer(){
        $this->gameState = "optionsPlayer";
    }
    function optionsOpponent(){
        $this->gameState = "optionsOpponent";
    }
    function declareWinner(){
        $this->gameState = "declareWinner";
    }
    function restart(){
        $this->gameState = "restart";
    }
    function getGameState(){
        return $this->gameState;
    }
}