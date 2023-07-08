<?php

namespace App\Core\Domain\Ports;

use App\Core\Domain\Entities\UserEntity;

interface UserRepositoryInterface {

    public function get(int $id): UserEntity;
    public function create(UserEntity $user): int;
    public function update(UserEntity $user, array $data);
    public function delete(UserEntity $user);

}