<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PetsRepository;

class PetController extends Controller
{
    protected $pet;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PetsRepository $pet)
    {
        $this->middleware('auth');
        $this->pet = $pet;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = $this->pet->getAllPets();
        return view('pets.lista-pets', ['pets' => $pets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pets.novo-pet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = $this->pet->store($request);
        if($create){
            return redirect()->route('pet_index')->with(['pets' => $this->pet->getAllPets()]);
        } else{
            return back()->with('Não foi possivel criar um novo registro!');
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
        $pets = $this->pet->getPetById($id);
        return view('pets.edit-pet', ['pets' => $pets]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update = $this->pet->update($request);
        if($update){
            return redirect()->route('pet_index')->with(['pets' => $this->pet->getAllPets()]);
        } else{
            return back()->with('Não foi possivel salvar o registro!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = $this->pet->destroyPet($id);
        if($destroy){
            return redirect()->route('pet_index')->with(['pets' => $this->pet->getAllPets()]);
        } else{
            return back()->with('Não foi possivel desativar o registro!');
        }
    }
}
