<?php

namespace App\Entity;

use App\Repository\SubscriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriptionRepository::class)]
class Subscription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $subscriptionName = null;

    /*
    #[ORM\Column(length: 50)]
    private ?string $name = null;
    */

    /*
    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;
    */

    /*
    #[ORM\Column(nullable: true)]
    private ?int $units_count = null;
    */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getSubscriptionName(): ?string
    {
        return $this->subscriptionName;
    }

    public function setSubscriptionName(string $subscriptionName): static
    {
        $this->subscriptionName = $subscriptionName;

        return $this;
    }

    /*
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }
    */

    /*
    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
    */

    /*
    public function getUnitsCount(): ?int
    {
        return $this->units_count;
    }

    public function setUnitsCount(?int $units_count): static
    {
        $this->units_count = $units_count;

        return $this;
    }
    */
}
