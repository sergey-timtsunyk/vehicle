<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Tests\Builder;

use PHPUnit\Framework\TestCase;
use Vehicle\Builder\BuilderVehicle;
use Vehicle\Builder\Creator\CreatorVehicleAir;
use Vehicle\Builder\Creator\CreatorVehicleGroundElectric;
use Vehicle\Builder\Creator\CreatorVehicleGroundFuel;
use Vehicle\Builder\Creator\CreatorVehicleWater;
use Vehicle\Output\PrintConsoleVehicle;
use Vehicle\Vehicle\EnergyTank\ElectricTank;
use Vehicle\Vehicle\EnergyTank\FuelTank;
use Vehicle\Vehicle\Type\VehicleAir;
use Vehicle\Vehicle\Type\VehicleGround;
use Vehicle\Vehicle\Type\VehicleWater;
use Vehicle\Vehicle\VehicleInterface;
use Vehicle\Vehicle\VehicleMotionInterface;

class BuilderVehicleTest extends TestCase
{
    public function test()
    {
        $this->expectOutputString('helicopter took off
helicopter refuel aviation fuel
helicopter flight
helicopter landing
boat depart
boat refuel petrol
boat swimming
boat moor
bmw starting
bmw refuel petrol
bmw music switched on
bmw moving
bmw stopped
kamaz starting
kamaz refuel diesel
kamaz music switched on
kamaz moving
kamaz stopped
tesla starting
tesla charge electricity
tesla music switched on
tesla moving
tesla stopped
');

        $builder = new BuilderVehicle();

        $vehicles = [
            $builder->setCreator(new CreatorVehicleAir('helicopter')),
            $builder->setCreator(new CreatorVehicleWater('boat')),
            $builder->setCreator(new CreatorVehicleGroundFuel('bmw')),
            $builder->setCreator(new CreatorVehicleGroundFuel('kamaz')),
            $builder->setCreator(new CreatorVehicleGroundElectric('tesla')),
        ];

        $print = new PrintConsoleVehicle();
        /**
         * @var VehicleMotionInterface|VehicleInterface $vehicle
         */
        foreach($vehicles as $vehicle) {

            $print->setVehicle($vehicle);
            $print->printAction($vehicle->start());

            switch (true) {
                case $vehicle instanceof VehicleGround
                    && $vehicle->getEnergyTank() instanceof ElectricTank:
                    $print->printAction($vehicle->getEnergyTank()->fill('electricity'));
                    $print->printAction($vehicle->getMusicPlayer()->musicOn());
                    break;
                case $vehicle instanceof VehicleGround
                    && $vehicle->getEnergyTank() instanceof FuelTank
                    && $vehicle->getName() == 'bmw':
                    $print->printAction($vehicle->getEnergyTank()->fill('petrol'));
                    $print->printAction($vehicle->getMusicPlayer()->musicOn());
                    break;
                case $vehicle instanceof VehicleGround
                    && $vehicle->getEnergyTank() instanceof FuelTank
                    && $vehicle->getName() == 'kamaz':
                    $print->printAction($vehicle->getEnergyTank()->fill('diesel'));
                    $print->printAction($vehicle->getMusicPlayer()->musicOn());
                    break;
                case $vehicle instanceof VehicleAir:
                    $print->printAction($vehicle->getEnergyTank()->fill('aviation fuel'));
                    break;
                case $vehicle instanceof VehicleWater:
                    $print->printAction($vehicle->getEnergyTank()->fill('petrol'));
                    break;
            }

            $print->printAction($vehicle->move());
            $print->printAction($vehicle->stop());
        }
    }
}
