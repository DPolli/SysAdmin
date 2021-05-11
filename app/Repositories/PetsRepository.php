<?php

namespace App\Repositories;

use App\Repositories\Contracts\PetsRepositoryInterface;
use App\Models\Pet;

class PetsRepository implements PetsRepositoryInterface
{
    protected $pet;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Pet $pet)
    {
        $this->pet = $pet;
    }

    public function update($request)
    {
        $id = $request->id;
        $update = $this->pet->find($id)->update([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'raca' => $request->raca,
            'dono' => $request->dono,
            'telefone' => $request->telefone
        ]);

        return $update;
    }

    public function store($request)
    {
        $create = $this->pet->create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'raca' => $request->raca,
            'dono' => $request->dono,
            'telefone' => $request->telefone
        ]);
        return $create;
    }

    public function getAllPets()
    {
        $pets = $this->pet->select()
                            ->where('active', true)
                            ->orderBy('id')
                            ->get();
        return $pets;
    }

    public function getPetById($id)
    {
        $pet = $this->pet->select()
                            ->where([
                                ['id', $id],
                                ['active', true]
                            ])->first();
        return $pet;
    }

    public function destroyPet($id)
    {
        $destroy = $this->pet->find($id)->update(['active' => false]);
        return $destroy;
    }
}
