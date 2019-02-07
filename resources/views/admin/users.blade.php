@extends('layouts.app')

@section('content')

  <h1>Gestion des utilisateurs</h1>

  <input type="text"
    name="search_user"
    id="search_user"
    placeholder="Rechercher un utilisateur" />

  <br>
  <table>
    <tr>
      <th>Nom d'utilisateur</th>
      <th colspan="3">Actions</th>
    </tr>
  @foreach ($userList as $user)
    <tr>  
      <td><a href="{{ url("/admin/users/$user->id") }}">{{ $user -> name }}</a></td>
      <td><span>Ban</span></td>
      <td><span>Kick</span></td>
      <td><span>Message</span></td>
    </tr>
  @endforeach
  </table>

@endsection
