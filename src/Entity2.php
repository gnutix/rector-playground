<?php

declare(strict_types=1);

namespace App;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Entity2
{
    public function getId(): int
    {
        return 42;
    }
}
