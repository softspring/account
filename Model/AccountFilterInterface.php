<?php

namespace Softspring\Account\Model;

interface AccountFilterInterface
{
    /**
     * @return AccountInterface|null
     */
    public function getAccount(): ?AccountInterface;
}