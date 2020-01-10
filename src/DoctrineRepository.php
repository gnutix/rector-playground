<?php

declare(strict_types=1);

namespace App;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

/**
 * @template T
 */
abstract class DoctrineRepository
{
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var EntityRepository<T>
     */
    protected $repository;

    public function __construct(ManagerRegistry $registry)
    {
        /** @var class-string<T> $entityClass */
        $entityClass = $this->getEntityClass();

        /** @var EntityManagerInterface $entityManager */
        $entityManager = $registry->getManagerForClass($entityClass);

        $this->entityManager = $entityManager;
        $this->repository = $entityManager->getRepository($entityClass);
    }

    /**
     * @return class-string<T>
     */
    abstract protected function getEntityClass(): string;
}
