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
use Vehicle\Vehicle\VehicleMusicInterface;
use Vehicle\Vehicle\VehicleOptionce\Music\MusicPlayer;

/**
 * All vehicles that travel on ground
 */
class VehicleGround implements VehicleInterface, VehicleMotionInterface, VehicleMusicInterface
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
     * @var MusicPlayer
     */
    public $musicPlayer;

    /**
     * VehicleGround constructor.
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
        return 'starting';
    }

    /**
     * @return string
     */
    public function stop(): string
    {
        return 'stopped';
    }

    /**
     * @return string
     */
    public function move(): string
    {
        return 'moving';
    }

    /**
     * @param MusicPlayer $musicPlayer
     */
    public function setMusicPlayer(MusicPlayer $musicPlayer)
    {
        $this->musicPlayer = $musicPlayer;
    }

    /**
     * @return MusicPlayer
     */
    public function getMusicPlayer(): MusicPlayer
    {
        return $this->musicPlayer;
    }
}
