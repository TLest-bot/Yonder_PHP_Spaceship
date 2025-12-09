<?php
namespace Interfaces\Entities;
require_once __DIR__ . '/../../Entities/Weapon.php';

use Entities\Weapon;
Interface IArmory
{
public function AddWeapon(Weapon $weapon): bool;
}