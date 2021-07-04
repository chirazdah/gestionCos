@extends('layouts.master')


@section('titre')
  Achat Prime 
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h5>Ajouter Prime</h5>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "  href ="{{ route('admin.prime.index')}}"> Back</a>
     </div>
  </div>
  <form action ="{{ route('admin.prime.store')}}" method="POST">
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
          <select class="form-select"  name="titre" aria-label="Default select example">
               
               <option value="Prime naissance">Prime naissance</option>
               <option value="Prime decee">Prime decee </option>
               <option value="Prime mariage">Prime mariage</option>
               
          </select>
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