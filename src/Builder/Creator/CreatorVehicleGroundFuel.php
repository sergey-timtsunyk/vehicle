<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Builder\Creator;

use Vehicle\Vehicle\EnergyTank\FuelTank;
use Vehicle\Vehicle\Type\VehicleGround;
use Vehicle\Vehicle\VehicleInterface;
use Vehicle\Vehicle\VehicleOptionce\Music\MusicPlayer;

class CreatorVehicleGroundFuel implements CreatorInterface
{
    /**
     * @var VehicleGround
     */
    private $vehicle;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->vehicle = new VehicleGround($name);
    }

    public function settingVehicle()
    {
        $this->vehicle->setEnergyTank(new FuelTank());
        $this->vehicle->setMusicPlayer(new MusicPlayer());
    }

    /**
     * @return VehicleInterface
     */
    public function getVehicle(): VehicleInterface
    {
        return $this->vehicle;
    }
}
