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
  <a href="candidato/inclusao"> + Adicionar Candidato</a>
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
      <th scope="col">E-mail</th>
      <th scope="col">Linkeding</th>
      <th scope="col">Github</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    @foreach ($candidatos as $c)
    <tr>
    <td></td>
      <td>{{$c->id}}</td>
      <td>{{$c->nome}}</td>
      <td>{{$c->email}}</td>
      <td>{{$c->linkeding}}</td>
      <td>{{$c->github}}</td>
      <td>
                    <a href="">Editar</a>
                    <a href="">Deletar</a>
                </td>
            </tr>
            @endforeach
            </table>
