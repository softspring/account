<?php

namespace Softspring\Account\Model;

use Symfony\Component\Validator\Constraints\Collection;

interface MultiAccountedInterface
{
    /**
     * @return AccountInterface[]|Collection
     */
    public function getAccounts(): Collection;

    /**
     * @param AccountInterface $account
     */
    public function addAccount(AccountInterface $account): void;

    /**
     * @param AccountInterface $account
     */
    public function removeAccount(AccountInterface $account): void;
}