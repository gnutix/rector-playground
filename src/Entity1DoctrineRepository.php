<?php

declare(strict_types=1);

namespace App;

/**
 * @extends DoctrineRepository<Entity1>
 */
final class Entity1DoctrineRepository extends DoctrineRepository implements Entity1RepositoryInterface
{
    public function findByEntity2(Entity2 $entity2): array
    {
        return $this->repository->findBy(['entity2Id' => $entity2->getId()]);
    }

    /**
     * @return class-string<T>
     */
    protected function getEntityClass(): string
    {
        return Entity1::class;
    }
}
