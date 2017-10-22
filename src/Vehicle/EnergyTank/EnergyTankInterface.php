<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Vehicle\EnergyTank;

interface EnergyTankInterface
{
    /**
     * @param string $fuel
     * @return string
     */
    public function refuel(string $fuel) : string;

    /**
     * @param string $fuel
     * @return string
     */
    public function fill(string $fuel) : string;
}
