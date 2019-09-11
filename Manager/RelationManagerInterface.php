<?php

namespace Softspring\Account\Manager;

use Doctrine\ORM\EntityRepository;
use Softspring\AccountBundle\Model\AccountUserRelationInterface;

/**
 * @deprecated since AccountBundle 1.1
 */
interface RelationManagerInterface
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
     * @return AccountUserRelationInterface
     */
    public function create(): AccountUserRelationInterface;
}