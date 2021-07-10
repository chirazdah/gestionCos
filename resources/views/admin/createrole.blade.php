@extends('layouts.master')


@section('titre')
   User profile
@endsection

@section('content')

  <div class="col-lg-12 margin-tb">

     <div class= "pull left">
       <h2>Ajouter Role </h2>
     </div>
     <div class ="pull right">
       <a class = "btn btn-success "  href =""> Back</a>
     </div>
  </div>
  <form action ="{{ route('admin.roles.store')}}" method="POST">
  @csrf

    <div class="row">

       <div class="col-xs-6 col-sm-6 col-md-6">
              <div class ="form-group">

                <strong> Role Description : </strong>
                <input type="text" name="name" class="form-control" placeholder="Role Name">
              </div>
              <div class = "col-xs-12 col-sm-12 col-md-12">
             <button type="submit" class ="btn btn-primary"> Enregistrer</button>

         </div>

         </div>

      </div>
</form>

 
  
@endsection