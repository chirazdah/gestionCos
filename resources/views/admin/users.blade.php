@extends('layouts.master')


@section('titre')
   User profile
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h5>Liste Des Utilisateur</h5>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "href ="{{route('admin.users.createuser')}}">Ajouter utilisateur</a>
     </div>
  </div>
  

    <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
         </tr>
       </thead>
       <tbody>
          @foreach($users as $user)
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{implode(' / ',$user->roles()->get()->pluck('name')->toArray())}}</td>
              <td>
              <a href="{{ route ('admin.users.edit', $user->id )}} " ><button class="btn btn_primary">Editer</button></a>

               <form action ="{{ route ('admin.users.destroy', $user->id )}}" method="POST"  class="d-inline" >
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn_warning">Supprimer</button>
               
               </form>
               </td>
            </tr>
         @endforeach
   
         </tbody>
     </table>

  
@endsection