<?php
namespace Interfaces\Entities;
require_once __DIR__ . '/../../Entities/Weapon.php';

Interface IArmory
{
public function AddWeapon(IWeapon $weapon): bool;
}