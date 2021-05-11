@extends('layouts.head')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Novo Animal</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="{{ route('pet_store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-input" id="nome" name="nome" placeholder="Nome Animal" value="{{ old('nome') }}" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control form-control-input" id="idade" name="idade" placeholder="Idade" value="{{ old('idade') }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-input" id="raca" name="raca" placeholder="Raça" value="{{ old('raca') }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-input" id="dono" name="dono" placeholder="Nome Dono" value="{{ old('dono') }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-input" id="telefone" name="telefone" placeholder="Telefone Contato" value="{{ old('telefone') }}" required>
                </div>
                <hr>
                <input type="submit" class="btn btn-primary btn-user-sm btn-block" value="Register Account">
            </form>
        </div>
    </div>

</div>
@endsection
