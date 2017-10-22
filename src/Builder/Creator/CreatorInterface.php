<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Builder\Creator;

use Vehicle\Vehicle\VehicleInterface;

interface CreatorInterface
{
    public function settingVehicle();

    public function getVehicle(): VehicleInterface;
}
