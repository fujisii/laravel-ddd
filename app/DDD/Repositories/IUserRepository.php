<?php
declare(strict_types=1);

require_once '../Entity/User/User.php';
require_once '../Entity/User/UserName.php';

interface IUserRepository
{
    public function Save(User $user): void;
    public function Find(UserName $name): User;
}
