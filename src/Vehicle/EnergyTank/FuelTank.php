<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Vehicle\EnergyTank;

/**
 * Used in vehicles with a fuel tank
 */
class FuelTank implements EnergyTankInterface
{

    /**
     * @param string $fuel
     * @return string
     */
    public function refuel(string $fuel): string
    {
        return sprintf('refuel %s', $fuel);
    }

    /**
     * @param string $fuel
     * @return string
     */
    public function fill(string $fuel): string
    {
        return sprintf('refuel %s', $fuel);
    }
}
