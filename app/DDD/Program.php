<?php
declare(strict_types=1);

use IUserRepository as GlobalIUserRepository;

require_once './Repositories/UserRepository.php';
require_once './DomainService/UserService.php';

require_once './Entities/User/User.php';
require_once './Entities/User/UserName.php';

interface IUserRepository
{
    public function Save(User $user): void;
    public function Find(UserName $name): User;
}

class Program
{
    private IUserRepository $userRepository;

    public function __construct(userRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function CreateUser(string $userName)
    {
        $user = new User(new UserName($userName));

        $userService = new UserService($this->userRepository);
        if ($userService->Exists($user))
        {
            throw new Exception(sprintf('%sは既に存在しています', $userName));
        }

        $this->userRepository->Save($user);
    }
}

$userRepository = new userRepository();
$program = new Program($userRepository);
$program->CreateUser('hoge');
