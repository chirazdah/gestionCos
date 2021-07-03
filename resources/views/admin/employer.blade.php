@extends('layouts.master')


@section('titre')
   Employer
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h5>Liste Des Employer</h5>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "href ="">Ajouter Employer</a>
       <a class = "btn btn-success "href ="">Importer Fichier </a>
     
  </div>
  

    <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">matricule</th>
            <th scope="col">nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">situation familiale</th>
            <th scope="col">etat salaire</th>
         </tr>
       </thead>
       <tbody>
          @foreach($employer as $employer)
            <tr>
              <th scope="row">{{$employer->matricule}}</th>
              <td>{{$employer->nom}}</td>
              <td>{{$employer->prenom}}</td>
              
              <td>{{$employer->situationfam}}</td>
              <td>{{$employer->etatsalaire}}</td>
            </tr>
         @endforeach
   
         </tbody>
     </table>

  
@endsection