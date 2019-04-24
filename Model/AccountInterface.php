<?php

namespace Softspring\Account\Model;

use Softspring\User\Model\MultiUsersInterface;
use Softspring\User\Model\OwnerInterface;

interface AccountInterface extends OwnerInterface
{
    /**
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void;

    /**
     * @return null|string
     */
    public function getName(): ?string;

    /**
     * @param null|string $name
     */
    public function setName(?string $name): void;
}