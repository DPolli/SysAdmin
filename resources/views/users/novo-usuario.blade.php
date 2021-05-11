@extends('layouts.head')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Novo Usuário</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="{{ route('user_store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-input" id="name" name="name" placeholder="Nome Usuário" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-input" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-input" id="cpf" name="cpf" placeholder="Cpf" value="{{ old('cpf') }}" required>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-input @error('password') is-invalid @enderror" id="password" name="password" placeholder="Senha" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <input id="password-confirm" type="password" class="form-control form-control-input" name="password_confirmation" placeholder="Confirme-Senha" required>
                    </div>
                </div>
                <hr>
                <input type="submit" class="btn btn-primary btn-user-sm btn-block" value="Gravar Usuário">
            </form>
        </div>
    </div>

</div>
@endsection
