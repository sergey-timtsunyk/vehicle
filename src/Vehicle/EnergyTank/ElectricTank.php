<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Vehicle\EnergyTank;

/**
 * Used in cars with a rechargeable battery
 */
class ElectricTank implements EnergyTankInterface
{
    /**
     * @param string $fuel
     * @return string
     */
    public function refuel(string $fuel): string
    {
        return sprintf('charge %s', $fuel);
    }

    /**
     * @param string $fuel
     * @return string
     */
    public function fill(string $fuel): string
    {
        return sprintf('charge %s', $fuel);
    }
}
