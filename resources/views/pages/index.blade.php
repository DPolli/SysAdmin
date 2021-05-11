@extends('layouts.head')

@section('content')

<!-- Illustrations -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bem vindo ao Pet Club</h6>
    </div>
    <div class="card-body">
        <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('startbootstrap-sb-admin-2-gh-pages/img/undraw_welcome_cats_thqn.svg')}}" alt="">
        </div>
        <p class="text-center">Você pode usar esse sistema em seu petshop para controlar os seus "clientes" de quatro patas!</p>
    </div>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>