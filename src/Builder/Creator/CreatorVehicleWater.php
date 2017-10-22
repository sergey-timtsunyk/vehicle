<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Builder\Creator;

use Vehicle\Vehicle\EnergyTank\FuelTank;
use Vehicle\Vehicle\Type\VehicleWater;
use Vehicle\Vehicle\VehicleInterface;

class CreatorVehicleWater implements CreatorInterface
{
    /**
     * @var VehicleWater
     */
    private $vehicle;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->vehicle = new VehicleWater($name);
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
