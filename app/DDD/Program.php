<?php
declare(strict_types=1);

require_once './Repositories/IUserRepository.php';
require_once './Repositories/UserRepository.php';
require_once './DomainService/UserService.php';

require_once './Entities/User/User.php';
require_once './Entities/User/UserName.php';

class Program
{
    private IUserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
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
