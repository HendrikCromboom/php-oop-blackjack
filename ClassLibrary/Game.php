<?php

declare(strict_types=1);

Class Game{
    private bool $isPlaying;
    private string $gameState; // Maybe create a model for this
    private Deck $deck;

    public function __construct( string $gameState)
    {
        $this->isPlaying = true;
        $this->gameState = $gameState;
        $this->deck = new Deck();
    }

    public function isPlaying(): bool
    {
        return $this->isPlaying;
    }

    public function setIsPlaying(bool $isPlaying): void
    {
        $this->isPlaying = $isPlaying;
    }

    /**
     * @return string
     */
    public function getGameState(): string
    {
        return $this->gameState;
    }

    /**
     * @param string $gameState
     */
    public function setGameState(string $gameState): void
    {
        $this->gameState = $gameState;
    }

    /**
     * @return Deck
     */
    public function getDeck(): Deck
    {
        return $this->deck;
    }

    public function shuffle(): void
    {
        $this->deck->shuffle();
    }

    public function getCards(): array
    {
       return $this->deck->getCards();
    }

    public function drawCard(): void
    {
        $this->deck->drawCard();
    }
}
