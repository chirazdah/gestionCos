@extends('layouts.master')


@section('titre')
   Employer 
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h2>Ajouter Un Employer</h2>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "  href ="{{ route('admin.employer.index')}}"> Back</a>
     </div>
  </div>
  <form action ="{{ route('admin.employer.store')}}" method="POST">
  @csrf

    <div class="row">

       <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Nom Employer: </strong>
                <input type="text" name="nom" class="form-control" placeholder="nom">
              </div>

         </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Prenom Employer: </strong>
                <input type="text" name="prenom" class="form-control" placeholder="prenom">
              </div>

         </div>

         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Etat Salaire : </strong>
                <input type="text" name="etatsalaire" class="form-control" placeholder="etat salaire">
              </div>

         </div> 
         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong>Situation Familliale: </strong>
                <input type="text" name="situationfam" class="form-control" placeholder="Situation Familliale">
              </div>

         </div> 
         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong>Salaire: </strong>
                <input type="float" name="salaire" class="form-control" placeholder="0.00">
              </div>

         </div> 
         <div class = "col-xs-12 col-sm-12 col-md-12">
             <button type="submit" class ="btn btn-primary"> Enregistrer</button>

         </div>

      </div>
</form>

 
  
@endsection