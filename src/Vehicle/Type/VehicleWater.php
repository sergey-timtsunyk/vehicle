<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Vehicle\Type;

use Vehicle\Vehicle\EnergyTank\EnergyTankInterface;
use Vehicle\Vehicle\VehicleInterface;
use Vehicle\Vehicle\VehicleMotionInterface;

/**
 * All vehicles that travel on water
 */
class VehicleWater implements VehicleInterface, VehicleMotionInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var EnergyTankInterface
     */
    public $energyTank;

    /**
     * VehicleWater constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param EnergyTankInterface $energyTank
     */
    public function setEnergyTank(EnergyTankInterface $energyTank)
    {
        $this->energyTank = $energyTank;
    }

    /**
     * @return EnergyTankInterface
     */
    public function getEnergyTank(): EnergyTankInterface
    {
        return $this->energyTank;
    }

    /**
     * @return string
     */
    public function start(): string
    {
        return 'depart';
    }

    /**
     * @return string
     */
    public function stop(): string
    {
        return 'moor';
    }

    /**
     * @return string
     */
    public function move(): string
    {
        return 'swimming';
    }
}
