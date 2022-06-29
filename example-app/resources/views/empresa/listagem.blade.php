<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>@yield('titulo')</title>
  </head>
  <body>
  <nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
<span class="navbar-text">
  <a href="/empresa/inclusao"> + Adicionar Empresa</a>
  <a href="/site">Voltar</a>
</nav>
</div>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Cidade</th>
      <th scope="col">Atuação</th>
      <th scope="col">Qtd. Funcionários</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    @foreach ($empresas as $e)
       <!-- {{$e->id}} -->
    <tr>
    <td></td>
      <td>{{$e->id}}</td>
      <td>{{$e->nome}}</td>
      <td>{{$e->cidade}}</td>
      <td>{{$e->area_atuacao}}</td>
      <td>{{$e->num_func}}</td>
      <td>
                    <a href="">Editar</a>
                    <a href="">Deletar</a>
                </td>
            </tr>
            @endforeach
            </table>

