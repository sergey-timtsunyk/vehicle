<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Vehicle;

/**
 * Describes the process of motion
 */
interface VehicleMotionInterface
{
    /**
     * @return string
     */
    public function start() : string;

    /**
     * @return string
     */
    public function stop() : string;

    /**
     * @return string
     */
    public function move() : string;
}
