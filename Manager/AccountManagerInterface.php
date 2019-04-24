<?php

namespace Softspring\Account\Manager;

use Doctrine\ORM\EntityRepository;
use Softspring\Account\Model\AccountInterface;

interface AccountManagerInterface
{
    /**
     * @return string
     */
    public function getClass(): string;

    /**
     * @return EntityRepository
     */
    public function getRepository(): EntityRepository;

    /**
     * @return AccountInterface
     */
    public function create(): AccountInterface;

    /**
     * @param AccountInterface $user
     */
    public function save(AccountInterface $user): void;

    /**
     * @param array $criteria
     * @return AccountInterface|null
     */
    public function findAccountBy(array $criteria): ?AccountInterface;
}