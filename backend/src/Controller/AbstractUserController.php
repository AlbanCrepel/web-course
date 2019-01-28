<?php

namespace App\Controller;

use App\Entity\AbstractUser;
use App\Entity\User;
use App\Entity\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AbstractUserController extends AbstractController
{
    /**
     * @Route(
     *     name="api_users_post",
     *     path="api/users",
     *     methods={"POST"},
     *     defaults={
     *         "_api_resource_class"=User::class,
     *         "_api_collection_operation_name"="post"
     *     }
     * )
     * @Route(
     *     name="api_admins_post",
     *     path="api/admins",
     *     methods={"POST"},
     *     defaults={
     *         "_api_resource_class"=Admin::class,
     *         "_api_collection_operation_name"="post"
     *     }
     * )
     */
    public function postAction(AbstractUser $data, UserPasswordEncoderInterface $encoder)
    {
        return $this->encodePassword($data, $encoder);
    }

    /**
     * @Route(
     *     name="api_users_put",
     *     path="api/users/{id}",
     *     requirements={"id"="\d+"},
     *     methods={"PUT"},
     *     defaults={
     *         "_api_resource_class"=User::class,
     *         "_api_item_operation_name"="put"
     *     }
     * )
     * @Route(
     *     name="api_admins_put",
     *     path="api/admins/{id}",
     *     requirements={"id"="\d+"},
     *     methods={"PUT"},
     *     defaults={
     *         "_api_resource_class"=Admin::class,
     *         "_api_item_operation_name"="put"
     *     }
     * )
     */
    public function putAction(AbstractUser $data, UserPasswordEncoderInterface $encoder)
    {
        return $this->encodePassword($data, $encoder);
    }

    protected function encodePassword(AbstractUser $data, UserPasswordEncoderInterface $encoder)
    {
        $encoded = $encoder->encodePassword($data, $data->getPassword());
        $data->setPassword($encoded);

        return $data;
    }
}
