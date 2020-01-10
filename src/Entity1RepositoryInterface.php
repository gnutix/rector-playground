<?php

declare(strict_types=1);

namespace App;

interface Entity1RepositoryInterface
{
    /**
     * @return Entity1[]
     */
    public function findByEntity2(Entity2 $entity2): array;
}
