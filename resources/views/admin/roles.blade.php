@extends('layouts.master')


@section('titre')
   User Roles
@endsection

@section('content')
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Roles </th>
    </tr>
  </thead>
  <tbody>
  @foreach($roles as $role)
  <tr>
      <th scope="row">{{$role->id}}</th>
      <td>{{$role->name}}</td>
  </tr>
  @endforeach
  </tbody>
</table>
     
<a href="{{ route('admin.roles.createrole')}}" ><button class="btn btn_primary">Ajouter un Role</button></a>
  
@endsection