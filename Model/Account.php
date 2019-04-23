<?php

namespace Softspring\Account\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Softspring\User\Model\UserInterface;

class Account implements AccountInterface
{
    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var UserInterface|null
     */
    protected $owner;

    /**
     * @var Collection|UserInterface[]
     */
    protected $users;

    /**
     * Account constructor.
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * @inheritdoc
     */
    public function __toString(): string
    {
        return "{$this->getId()}";
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return UserInterface|null
     */
    public function getOwner(): ?UserInterface
    {
        return $this->owner;
    }

    /**
     * @param UserInterface|null $owner
     */
    public function setOwner(?UserInterface $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return Collection|UserInterface[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    /**
     * @param UserInterface $user
     */
    public function addUser(UserInterface $user): void
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
        }
    }

    /**
     * @param UserInterface $user
     */
    public function removeUser(UserInterface $user): void
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
        }
    }
}