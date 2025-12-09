<?php
Namespace Entities;

use Interfaces\Entities\IArmory;
use Entities\Room;
use Entities\Weapon;
require_once __DIR__ . '/../interfaces/Entities\IArmory.php';
require_once __DIR__ . '/Room.php';


class Armory extends Room implements IArmory
{
    public array $Weapons;

    public function __construct(string $Name, int $Length, int $Width)
    {
        parent::__construct($Name, $Length, $Width);
        $this->Weapons = [];
    }
    public function AddWeapon(Weapon $weapon): bool
    {
        $this->Weapons[] = $weapon;
        echo ("{$this->Name} Added {$weapon}");
        return true;
    }
}