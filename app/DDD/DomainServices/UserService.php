<?php

/**
 * ユーザー
 */
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
