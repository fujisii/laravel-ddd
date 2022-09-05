<?php
declare(strict_types=1);

require_once 'UserId.php';
require_once 'UserName.php';

class User
{
    private UserId $Id;
    private UserName $Name;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->Id;
    }
    public function setId(UserId $Id)
    {
        $this->Id = $Id;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setName(UserName $Name)
    {
        $this->Name = $Name;
    }

    public function CreateUser(UserName $Name)
    {
        $user = new User();
        $user->setId($Name);
        return $user;
    }
}
