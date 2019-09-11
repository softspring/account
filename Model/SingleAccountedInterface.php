<?php

namespace Softspring\Account\Model;

/**
 * @deprecated since AccountBundle 1.1
 */
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