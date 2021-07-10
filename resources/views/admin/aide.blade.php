@extends('layouts.master')


@section('titre')
   Liste  Aides Sociales
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h5>Liste  Aides Sociales</h5>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "href ="{{route('admin.aide.createaide')}}">Ajouter Aide </a>
     </div>
  </div>
  

    
  <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">id</th>
            <th scope="col">Nom Employé(e)</th>
            <th scope="col">Prenom Employé(e)</th>
            <th scope="col">Montant</th>


           
         </tr>
       </thead>
       <tbody>
          @foreach($aides as $aide)
            <tr>
              <th scope="row">{{$aide->id_aide}}</th>
              <td>{{$aide->nom}}</td>
              <td>{{$aide->prenom}}</td>
              <td>{{$aide->montant}}</td>
            
            </tr>
         @endforeach
   
         </tbody>
     </table>

  
@endsection