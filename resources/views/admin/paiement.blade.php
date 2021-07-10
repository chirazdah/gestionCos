@extends('layouts.master')


@section('titre')
   Table Paiement
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h5>Liste Paiement</h5>
     </div>
     <div class ="pull right">
       
     </div>
  </div>
  

    
  <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">id</th>
            <th scope="col">Nom Employé(e)</th>
            <th scope="col">Prenom Employé(e)</th>
            <th scope="col">Type Operation</th>
            <th scope="col">Titre Operation</th>
            <th scope="col">Somme A Retirer</th>
            <th scope="col">Date Début Paiement(s)</th>
         </tr>
       </thead>
       <tbody>
          @foreach($paiement as $paiement)
            <tr>
              <th scope="row">{{$paiement->id_paiement}}</th>
              <td>{{$paiement->nom}}</td>
              <td>{{$paiement->prenom}}</td>
              <td>{{$paiement->type}}</td>
              <td>{{$paiement->titre}}</td>
              <td>{{$paiement->somme_retirer}}</td>
              <td>{{$paiement->date_debut}}</td>
            
            </tr>
         @endforeach
   
         </tbody>
     </table>

@endsection