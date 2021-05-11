<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Repositories\UsersRepository;
use App\User;

class UserController extends Controller
{
    protected $usersRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UsersRepository $users)
    {
        $this->middleware('auth');
        $this->usersRepository = $users;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->usersRepository->getAllUsers();
        return view('users.lista-usuarios', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.novo-usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = $this->usersRepository->store($request);

        if($create){
            return redirect()->route('user_index')->with(['users' => $this->usersRepository->getAllUsers()]);
        } else{
            return back()->with('Não foi possivel criar o registro!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = $this->usersRepository->getUserById($id);
        return view('users.edit-usuario', ['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update = $this->usersRepository->update($request);

        if($update){
            return redirect()->route('user_index')->with(['users' => $this->usersRepository->getAllUsers()]);
        } else{
            return back()->with('Não foi possivel salvar o registro!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = $this->usersRepository->destroyUser($id);
        if($destroy){
            return redirect()->route('user_index')->with(['users' => $this->usersRepository->getAllUsers()]);
        } else{
            return back()->with('Não foi possivel desativar o registro!');
        }
    }
}
