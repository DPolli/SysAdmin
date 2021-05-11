<?php

namespace App\Repositories\Contracts;

interface UsersRepositoryInterface
{
    public function update($request);
    public function store($request);
    public function getAllUsers();
    public function getUserById($id);
    public function destroyUser($id);
}
