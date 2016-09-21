<?php

namespace App\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User implements Authenticatable
{

    use \LaravelDoctrine\ORM\Auth\Authenticatable;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $userId;

    /**
     * @ORM\Column(name="email",type="string",length="100")
     */
    protected $email;

    public function getAuthIdentifierName()
    {
        return 'userId';
    }
}