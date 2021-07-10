@extends('layouts.master')


@section('titre')
  Aide Sociale
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h5>Ajouter Aide</h5>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "  href ="{{ route('admin.aide.index')}}"> Back</a>
     </div>
  </div>
  <form action ="{{ route('admin.aide.store')}}" method="POST">
  @csrf

    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Nom : </strong>
                <input type="text" name="nom" class="form-control" placeholder="nom">
              </div>

         </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Prénom : </strong>
                <input type="text" name="prenom" class="form-control" placeholder="prenom">
              </div>

         </div>

         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Titre :</strong>
                <input type="text" name="titre" class="form-control" placeholder="titre">
              </div>

         </div>
         
         
         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">
                <strong> Date benifice :</strong>
                <input type="date" name="date_benifice" class="form-control" placeholder="date benifice ">
              </div>

         </div> 
         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong>Montant :</strong>
                <input type="float" name="montant" class="form-control" placeholder="montant">
              </div>

         </div> 
        
         <div class = "col-xs-12 col-sm-12 col-md-12">
             <button type="submit" class ="btn btn-primary"> Enregistrer</button>

         </div>

      </div>
</form>

 
  
@endsection