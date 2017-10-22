<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Output;

use Vehicle\Vehicle\VehicleInterface;

class PrintConsoleVehicle
{
    /**
     * @var VehicleInterface
     */
    private $vehicle;

    /**
     * @param VehicleInterface $vehicle
     */
    public function setVehicle(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    /**
     * @param string $action
     */
    public function printAction(string $action)
    {
        printf('%s %s%s', $this->vehicle->getName(), $action, PHP_EOL);
    }
}
