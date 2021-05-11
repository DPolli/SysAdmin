<?php

namespace App\Repositories;

use App\Repositories\Contracts\UsersRepositoryInterface;
use App\User;
use Auth;
use Hash;

class UsersRepository implements UsersRepositoryInterface
{
    protected $user;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function update($request)
    {
        //dd($request);
        $id = $request->id;
        $update = $this->user->find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf
        ]);

        return $update;
    }

    public function store($request)
    {
        $create = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'password' => Hash::make($request->password)
        ]);
        return $create;
    }

    public function getAllUsers()
    {
        $users = $this->user->select()
                            ->where('active', true)
                            ->orderBy('id')
                            ->get();
        return $users;
    }

    public function getUserById($id)
    {
        $user = $this->user->select()
                            ->where([
                                ['id', $id],
                                ['active', true]
                            ])->first();
        return $user;
    }

    public function destroyUser($id)
    {
        $destroy = $this->user->find($id)->update(['active' => false]);
        return $destroy;
    }
}
