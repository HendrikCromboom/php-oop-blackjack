<?php

declare(strict_types=1);

Class Player{
    private bool $active;
    private array $hand;
    private int $total;
    private string $choice;

    public function __construct()
    {
        $this->active = true;
        $this->hand = [];
        $this->total = 0;
        $this->choice = 'non';
    }

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

    public function getTotal(): int
    {
        $total = 0;
        foreach ($this->hand AS $card){
            $total +=$card ->getValue();
        }
        return $total;
    }
    public function setChoice($choice){
        $this->choice = $choice;
    }

    public function getChoice(){
        return $this->choice;
    }
    function dump(){
        var_dump(get_object_vars($this));
    }
}