<?php

namespace Softspring\Account\Manager;

use Doctrine\ORM\EntityRepository;
use Softspring\Account\Model\AccountUserRelationInterface;

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