<?php
declare(strict_types=1);

require_once '../Entity/User.php';
require_once './Repositories/IUserRepository.php';

class UserService
{
    private IUserRepository $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function Exists(User $user)
    {
        $found = $this->userRepository->Find($user->getName());

        return $found !== null;
    }
}
