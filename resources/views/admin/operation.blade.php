@extends('layouts.master')


@section('titre')
  Operations
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h5>Operations</h5>
     </div>
    

  <table class="table">
       <thead class="thead-light">
         <tr>
            <th scope="col">id_operation</th>
            <th scope="col">matricule</th>
            <th scope="col">date_benifice</th>  
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