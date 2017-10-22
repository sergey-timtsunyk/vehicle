<?php
/**
 * Created by PhpStorm.
 * User: Serhii T.
 * Date: 10/22/17
 */

namespace Vehicle\Vehicle;

use Vehicle\Vehicle\VehicleOptionce\Music\MusicPlayer;

interface VehicleMusicInterface
{
    /**
     * @param MusicPlayer $musicPlayer
     */
    public function setMusicPlayer(MusicPlayer $musicPlayer);

    /**
     * @return MusicPlayer
     */
    public function getMusicPlayer(): MusicPlayer;
}
