<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Table(name="admins")
 * @ApiResource(
 *     normalizationContext={"groups"={"user_read","admin_read"}},
 *     itemOperations={
 *      "get",
 *      "delete",
 *  }, collectionOperations={
 *      "get",
 *      "post"={"route_name"="api_admins_post"}
 *  })
 * @ORM\Entity(repositoryClass="App\Repository\AdminRepository")
 */
class Admin extends AbstractUser
{
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @Groups({"user_read"})
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
