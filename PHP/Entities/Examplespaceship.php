<?php

namespace Entities;

use Interfaces\Entities\ICanon;
use Interfaces\Entities\ISpaceship;

class Examplespaceship implements ISpaceship
{

    public function getName(): string
    {
        // TODO: Implement getName() method.
    }

    public function setName(string $Name): void
    {
        // TODO: Implement setName() method.
    }

    public function getHitpoints(): int
    {
        // TODO: Implement getHitpoints() method.
    }

    public function setHitpoints(int $Hitpoints): void
    {
        // TODO: Implement setHitpoints() method.
    }

    public function getFuel(): int
    {
        // TODO: Implement getFuel() method.
    }

    public function setFuel(int $Fuel): void
    {
        // TODO: Implement setFuel() method.
    }

    public function AddCanon(ICanon $Canon)
    {
        // TODO: Implement AddCanon() method.
    }

    public function RemoveCanon(ICanon $CanonToRemove): bool
    {
        // TODO: Implement RemoveCanon() method.
    }

    public function Attack(ISpaceship $Attacked_Spaceship): int
    {
        // TODO: Implement Attack() method.
    }
}