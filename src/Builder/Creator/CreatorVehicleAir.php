<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Builder\Creator;

use Vehicle\Vehicle\EnergyTank\EnergyTankInterface;
use Vehicle\Vehicle\EnergyTank\FuelTank;
use Vehicle\Vehicle\Type\VehicleAir;
use Vehicle\Vehicle\VehicleInterface;

class CreatorVehicleAir implements CreatorInterface
{
    /**
     * @var VehicleAir
     */
    private $vehicle;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->vehicle = new VehicleAir($name);
    }

    public function settingVehicle()
    {
        $this->vehicle->setEnergyTank(new FuelTank());
    }

    /**
     * @return VehicleInterface
     */
    public function getVehicle(): VehicleInterface
    {
        return $this->vehicle;
    }
}
