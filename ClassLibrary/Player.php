<?php

declare(strict_types=1);

Class Player{
    private bool $active;
    private array $hand;

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getHand(): array
    {
        return $this->hand;
    }

    public function addToHand(object $card): void // Takes a parameter that is a card Object and pushes it to the player hand array
    {
        array_push($this->hand, $card);
    }

    public function countHand(): int
    {
        return count($this->hand);
    }
}