@extends('layouts.head')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar Animal</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="{{ route('pet_update') }}">
                @csrf
                <div class="form-group">
                    <label class="label" for="nome">Nome Animal</label>
                    <input type="text" class="form-control form-control-input" id="nome" name="nome" placeholder="Nome Animal" value="{{ $pets->nome ?? '' }}" required>
                </div>
                <div class="form-group">
                    <label class="label" for="idade">Idade</label>
                    <input type="number" class="form-control form-control-input" id="idade" name="idade" placeholder="Idade" value="{{ $pets->idade ?? '' }}" required>
                </div>
                <div class="form-group">
                    <label class="label" for="raca">Raça</label>
                    <input type="text" class="form-control form-control-input" id="raca" name="raca" placeholder="Raça" value="{{ $pets->raca ?? '' }}" required>
                </div>
                <div class="form-group">
                    <label class="label" for="dono">Dono</label>
                    <input type="text" class="form-control form-control-input" id="dono" name="dono" placeholder="Nome Dono" value="{{ $pets->dono ?? '' }}" required>
                </div>
                <div class="form-group">
                    <label class="label" for="telefone">Telefone</label>
                    <input type="text" class="form-control form-control-input" id="telefone" name="telefone" placeholder="Telefone Contato" value="{{ $pets->telefone ?? '' }}" required>
                </div>
                <hr>
                <input type="submit" class="btn btn-primary btn-user-sm btn-block" value="Salvar Registro">
                <input type="hidden" class="hidden" name="id" value="{{ $pets->id }}">
            </form>
        </div>
    </div>

</div>
@endsection
