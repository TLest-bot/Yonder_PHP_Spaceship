<?php

namespace Interfaces\Entities;

require_once __DIR__ . '/../../Entities/Spaceship.php';
require_once __DIR__ . '/../../Entities/Canon.php';
use Entities\Spaceship;
use Entities\Canon;

interface ISpaceship
{

    public function getName(): string;

    public function setName(string $Name): void;

    public function getHitpoints(): int;

    public function setHitpoints(int $Hitpoints): void;

    public function getFuel(): int;

    public function setFuel(int $Fuel): void;

    public function AddCanon(ICanon $Canon);

    public function RemoveCanon(ICanon $CanonToRemove) : bool;

    public function Attack(ISpaceship $Attacked_Spaceship): int;
}