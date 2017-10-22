<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Builder;

use Vehicle\Builder\Creator\CreatorInterface;
use Vehicle\Builder\Creator\CreatorVehicleAir;

class BuilderVehicle
{
    /**
     * @param CreatorInterface $creator
     * @return \Vehicle\Vehicle\VehicleInterface
     */
    public function setCreator(CreatorInterface $creator)
    {
        $creator->settingVehicle();

        return $creator->getVehicle();
    }
}
