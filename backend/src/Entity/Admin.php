<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Table(name="admins")
 * @ApiResource(itemOperations={
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
