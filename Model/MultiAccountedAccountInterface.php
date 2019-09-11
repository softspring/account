<?php

namespace Softspring\Account\Model;

use Doctrine\Common\Collections\Collection;
use Softspring\UserBundle\Model\UserInterface;

/**
 * @deprecated since AccountBundle 1.1
 */
interface MultiAccountedAccountInterface
{
    /**
     * @return AccountUserRelationInterface[]|Collection
     */
    public function getRelations(): Collection;

    /**
     * @param AccountUserRelationInterface $relation
     */
    public function addRelation(AccountUserRelationInterface $relation): void;

    /**
     * @param AccountUserRelationInterface $relation
     */
    public function removeRelation(AccountUserRelationInterface $relation): void;

    /**
     * @return UserInterface[]|Collection
     */
    public function getUsers(): Collection;
}