<?php

namespace Softspring\Account\Model;

interface GetAccountInterface
{
    /**
     * @return AccountInterface|null
     */
    public function getAccount(): ?AccountInterface;
}