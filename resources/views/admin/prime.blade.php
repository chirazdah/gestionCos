@extends('layouts.master')


@section('titre')
   Table Prime
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h5>Liste Prime</h5>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "href ="{{route('admin.prime.createprime')}}">Ajouter prime</a>
     </div>
  </div>
  

    
  <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom Employé(e)</th>
            <th scope="col">Prénom Employé(e)</th>
            <th scope="col">Titre</th>
            <th scope="col">Montant</th>
           
         </tr>
       </thead>
       <tbody>
          @foreach($prime as $prime)
            <tr>
              <th scope="row">{{$prime->id_prime}}</th>
              <td>{{$prime->nom}}</td>
              <td>{{$prime->prenom}}</td>
              <td>{{$prime->titre}}</td>
              <td>{{$prime->montant}} DA</td>
            </tr>
         @endforeach
   
         </tbody>
     </table>

  
@endsection