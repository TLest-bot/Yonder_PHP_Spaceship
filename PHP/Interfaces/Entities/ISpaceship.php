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

    public function AddCanon(Canon $Canon);

    public function RemoveCanon(Canon $CanonToRemove) : bool;

    public function Attack(Spaceship $Attacked_Spaceship): int;
}