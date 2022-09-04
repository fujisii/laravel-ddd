<?php
declare(strict_types=1);

require_once 'UserId.php';

class User
{
    private UserId $id;
    private string $name;

    public function __construct(UserId $id, string $name)
    {
        if (is_null($id)) throw new InvalidArgumentException('$id is null.');
        if (is_null($name)) throw new InvalidArgumentException('$name is null');

        $this->id = $id;
        $this->name = $name;
    }

}
