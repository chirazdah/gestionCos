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
       <a class = "btn btn-success "href ="{{route('admin.employer.createemployer')}}">Ajouter Employer</a>
       <a class = "btn btn-success "href ="">Importer Fichier </a>
     
  </div>
  

    <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">Matricule</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Situation Familiale</th>
            <th scope="col">Etat Salaire</th>

         </tr>
       </thead>
       <tbody>
          @foreach($employer as $employer)
            <tr>
              <th scope="row">{{$employer->matricule}}</th>
              <td>{{$employé->nom}}</td>
              <td>{{$employer->prenom}}</td>
              <td>{{$employer->situationfam}}</td>
              <td>{{$employer->etatsalaire}}</td>
            </tr>
         @endforeach
   
         </tbody>
     </table>

  
@endsection