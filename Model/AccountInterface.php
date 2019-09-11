<?php

namespace Softspring\Account\Model;

use Softspring\UserBundle\Model\OwnerInterface;

/**
 * @deprecated since AccountBundle 1.1
 */
interface AccountInterface extends OwnerInterface
{
    /**
     * @return mixed|null
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getName(): ?string;

    /**
     * @param null|string $name
     */
    public function setName(?string $name): void;
}