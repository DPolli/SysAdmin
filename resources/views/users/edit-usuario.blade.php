@extends('layouts.head')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar Usuário</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="{{ route('user_update') }}">
                @csrf
                <div class="form-group">
                    <label class="label" for="name">Nome Usuário</label>
                    <input type="text" class="form-control form-control-input" id="name" name="name" placeholder="Nome Usuário" value="{{ $users->name }}" required>
                </div>
                <div class="form-group">
                    <label class="label" for="email">Email</label>
                    <input type="email" class="form-control form-control-input" id="email" name="email" placeholder="Email" value="{{ $users->email }}" required>
                </div>
                <div class="form-group">
                    <label class="label" for="cpf">CPF</label>
                    <input type="text" class="form-control form-control-input" id="cpf" name="cpf" placeholder="Cpf" value="{{ $users->cpf }}" required>
                </div>
                <hr>
                <input type="submit" class="btn btn-primary btn-user-sm btn-block" value="Salvar Registro">
                <input type="hidden" class="hidden" name="id" value="{{ $users->id }}">
            </form>
        </div>
    </div>

</div>
@endsection
