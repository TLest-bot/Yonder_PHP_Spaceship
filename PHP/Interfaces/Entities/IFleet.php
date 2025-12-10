<?php

namespace Interfaces\Entities;

use Entities\Spaceship;

require_once __DIR__ . '/../../Entities/Spaceship.php';

interface IFleet
{
    public function AddShip(ISpaceship $spaceship ) : void;
    public function removeDeadShips(): void;
    public function removeShip(ISpaceship $shipToRemove): void;
    public function getShips(): int;
    public function getRandomAliveShip(): ISpaceship;
    public function hasAvailableShip(): bool;
    public function getFleetName(): string;
    public function setFleetName(string $FleetName): void;
    public function getLostShips(): array;
}