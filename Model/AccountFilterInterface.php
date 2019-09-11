<?php

namespace Softspring\Account\Model;

/**
 * @deprecated since AccountBundle 1.1
 */
interface AccountFilterInterface
{
    /**
     * @return AccountInterface|null
     */
    public function getAccount(): ?AccountInterface;
}