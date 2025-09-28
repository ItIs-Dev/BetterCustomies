<?php
declare(strict_types=1);

namespace customiesdevs\customies\sound;

use pocketmine\world\World;
use pocketmine\math\Vector3;

/**
 * Class CustomiesSoundFactory
 * 
 * This factory class is responsible for creating and spawning custom sounds
 * in the world. It provides a simple interface to create sounds 
 * by specifying their type and position in the world.
 */
class CustomiesSoundFactory {

    /**
     * Creates and spawns a custom particle at the given position in the world.
     * 
     * @param World $world The world where the particle should be spawned.
     * @param Vector3 $pos The position in the world where the particle should appear.
     * @param string $nameParticle The name of the particle to be created.
     * 
     * @return void
     */
    public function createParticle(World $world, Vector3 $pos, string $nameParticle, ?array $players = null): void {
        $world->addSound($pos, new CustomiesSound($nameParticle), $players);
    }
}
