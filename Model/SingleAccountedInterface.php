<?php

namespace Softspring\Account\Model;

interface SingleAccountedInterface
{
    /**
     * @return AccountInterface|null
     */
    public function getAccount(): ?AccountInterface;

    /**
     * @param AccountInterface|null $account
     */
    public function setAccount(?AccountInterface $account): void;
}