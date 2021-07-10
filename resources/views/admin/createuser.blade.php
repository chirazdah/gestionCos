@extends('layouts.master')


@section('titre')
   User profile
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
     <h5>Ajouter Un Utilisateur</h5>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "  href ="{{ route('admin.users.index')}}"> Back</a>
     </div>
  </div>
  <form action ="{{ route('admin.users.store')}}" method="POST">
  @csrf

    <div class="row">

       <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Nom Utilisateur : </strong>
                <input type="text" name="name" class="form-control" placeholder="nom">
              </div>

         </div>

         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Email : </strong>
                <input type="email" name="email" class="form-control" placeholder="email@email.com">
              </div>

         </div> 
         <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Mot De Passe : </strong>
                <input type="password" name="password" class="form-control" placeholder="password">
              </div>

         </div>
         <div class = "col-xs-12 col-sm-12 col-md-12">
             <button type="submit" class ="btn btn-primary"> Enregistrer</button>

         </div>

      </div>
</form>

 
  
@endsection