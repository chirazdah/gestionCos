@extends('layouts.master')


@section('titre')
  Operations
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h5>Liste Des Operations</h5>
     </div>
    

  <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">Id Operation</th>
            <th scope="col">Matricule</th>
            <th scope="col">Date Benifice</th>  
         </tr>
       </thead>
       <tbody>
          @foreach($operation as $operation)
            <tr>
              <th scope="row">{{$operation->id}}</th>
              <td>{{$operation->matricule}}</td>
              <td>{{$operation->date_benifice}}</td>

            </tr>
         @endforeach
   
         </tbody>
     </table>

  
@endsection