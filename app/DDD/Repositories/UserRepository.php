<?php
declare(strict_types=1);

require_once '../Entity/User/User.php';
require_once '../Entity/User/UserId.php';
require_once '../Entity/User/UserName.php';

interface IUserRepository
{
    public function Save(User $user): void;
    public function Find(UserName $name): User;
    // public function Exists(UserName $name): bool;
}

class userRepository
{
    private string $connectionString;

    public function __construct()
    {
        $this->connectionString = '接続情報を格納する';
    }

    public function Save(User $user): void
    {
        // UPSERT処理
        // ...略...
    }

    public function Find(UserName $name)
    {
        // Find処理
        // ...略...

        if ('取得成功か')
        {
            $id = '取得した情報からidを格納する';
            $name = '取得した情報からnameを格納する';

            return new User(
                new UserId($id),
                new UserName($name)
            );
        }
        else
        {
            return null;
        }
    }
}