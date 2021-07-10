@extends('layouts.master')


@section('titre')
   Table Achat Pret
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h5>Liste Des Achat Pret</h5>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "href ="{{route('admin.achatpret.createachatpret')}}">Ajouter Achat</a>
     </div>
  </div>
  

    
  <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">id</th>
            <th scope="col">Nom Employé(e)</th>
            <th scope="col">Prénom Employé(e)</th>
            <th scope="col">Type</th>
            <th scope="col">Titre</th>
            <th scope="col">Somme</th>
            
         </tr>
       </thead>
       <tbody>
          @foreach($achatpret as $achatpret)
            <tr>
              <th scope="row">{{$achatpret->id_achat}}</th>
              <td>{{$achatpret->type}}</td>
              <td>{{$achatpret->nom}}</td>
              <td>{{$achatpret->prenom}}</td>
              <td>{{$achatpret->titre}}</td>
              <td>{{$achatpret->somme_max}} DA</td>
              
            </tr>
         @endforeach
   
         </tbody>
     </table>

  
@endsection