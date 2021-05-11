<?php

namespace App\Repositories\Contracts;

interface PetsRepositoryInterface
{
    public function update($request);
    public function store($request);
    public function getAllPets();
    public function getPetById($id);
    public function destroyPet($id);
}
