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
       <a class = "btn btn-success "href ="">Ajouter Paiement</a>
     </div>
  </div>
  

    
  <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">id</th>
            <th scope="col">nom employer</th>
            <th scope="col">prenom employer</th>
            <th scope="col">somme a retirer</th>
         </tr>
       </thead>
       <tbody>
          @foreach($paiement as $paiement)
            <tr>
              <th scope="row">{{$paiement->id_paiement}}</th>
              <td>{{$paiement->nom}}</td>
              <td>{{$paiement->prenom}}</td>
              <td>{{$paiement->somme_retirer}}</td>
            
            </tr>
         @endforeach
   
         </tbody>
     </table>

  
@endsection