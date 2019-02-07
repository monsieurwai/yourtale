@extends('layouts.app')

@section('content')

  <h1>Pannel administration</h1>
  Il faut intégrer nos différents outils ici, et sécuriser cette page si on n'est pas administrateur
  <a href="{{ url('/admin/users') }}">Utilisateurs</a>

@endsection
