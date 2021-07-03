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
       <a class = "btn btn-success "href ="">Ajouter Achat</a>
     </div>
  </div>
  

    
  <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">id</th>
            <th scope="col">id_operation</th>
            <th scope="col">type</th>
            <th scope="col">titre</th>
            <th scope="col">somme max</th>
            <th scope="col">date fin prevue</th>
            <th scope="col">date fin reel</th>
         </tr>
       </thead>
       <tbody>
          @foreach($achatpret as $achatpret)
            <tr>
              <th scope="row">{{$achatpret->id_achat}}</th>
              <td>{{$achatpret->operation()->pluck('matricule')}}</td>
              <td>{{$achatpret->type}}</td>
              
              <td>{{$achatpret->titre}}</td>
              <td>{{$achatpret->somme_max}}</td>
              <td>{{$achatpret->date_fin_prevue}}</td>
              
              <td>{{$achatpret->date_fin_reel}}</td>
            </tr>
         @endforeach
   
         </tbody>
     </table>

  
@endsection