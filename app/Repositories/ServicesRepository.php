<?php

namespace App\Repositories;

use Auth;
use App\Models\Service;
use App\Repositories\Contracts\ServicesRepositoryInterface;

class ServicesRepository implements ServicesRepositoryInterface
{
    private $service;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function update($request)
    {
        $id = $request->id;
        $update = $this->service->find($id)->update([
            'name' => $request->name,
            'cost' => $request->cost,
            'description' => $request->description,
            'active' => $request->active
        ]);

        return $update;
    }

    public function store($request)
    {
        $create = $this->service->create([
            'name' => $request->name,
            'cost' => $request->cost,
            'description' => $request->description,
            'active' => $request->active
        ]);
        return $create;
    }

    public function getAllServices()
    {
        $services = $this->service->select()
                            ->where('active', true)
                            ->orderBy('id')
                            ->get();
        return $services;
    }

    public function getServiceById($id)
    {
        $service = $this->service->select()
                            ->where([
                                ['id', $id],
                                ['active', true]
                            ])->first();
        return $service;
    }

    public function destroyService($id)
    {
        $destroy = $this->service->find($id)
                        ->update(['active' => false]);
        return $destroy;
    }
}
