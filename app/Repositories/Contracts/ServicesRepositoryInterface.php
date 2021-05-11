<?php

namespace App\Repositories\Contracts;

interface ServicesRepositoryInterface
{
    public function update($request);
    public function store($request);
    public function getAllServices();
    public function getServiceById($id);
    public function destroyService($id);
}
