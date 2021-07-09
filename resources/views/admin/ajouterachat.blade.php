@extends('layouts.master')


@section('titre')
  Achat Pret 
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h2>Ajouter Achat</h2>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "  href ="{{ route('admin.achatpret.index')}}"> Back</a>
     </div>
  </div>
  <form action ="{{ route('admin.achatpret.store')}}" method="POST">
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

                <strong> Prenom : </strong>
                <input type="text" name="prenom" class="form-control" placeholder="prenom">
              </div>

         </div>

       <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Titre </strong>
                <input type="text" name="titre" class="form-control" placeholder="Titre">
              </div>

         </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Type </strong>
                <input type="text" name="type" class="form-control" placeholder="type">
              </div>

         </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> somme max</strong>
                <input type="float" name="somme_max" class="form-control" placeholder="somme">
              </div>

         </div> 
        
         <div class = "col-xs-12 col-sm-12 col-md-12">
             <button type="submit" class ="btn btn-primary"> Enregistrer</button>

         </div>

      </div>
</form>

 
  
@endsection