<?php

namespace Softspring\Account\Model;

use Doctrine\Common\Collections\Collection;
use Softspring\User\Model\UserInterface;

interface AccountInterface
{
    /**
     * @return null|string
     */
    public function getName(): ?string;

    /**
     * @return UserInterface|null
     */
    public function getOwner(): ?UserInterface;

    /**
     * @return UserInterface[]|Collection
     */
    public function getUsers(): Collection;
}