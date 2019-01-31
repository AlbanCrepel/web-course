<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Table(name="users")
 * @ApiResource(
 *     normalizationContext={"groups"={"user_read"}},
 *     itemOperations={
 *      "get",
 *      "delete",
 *  }, collectionOperations={
 *      "get",
 *      "post"={"route_name"="api_users_post"}
 *  }),
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends AbstractUser
{

}
