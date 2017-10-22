<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Vehicle;

use Vehicle\Vehicle\EnergyTank\EnergyTankInterface;

interface VehicleInterface
{
    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @return EnergyTankInterface
     */
    public function getEnergyTank() : EnergyTankInterface;
}
