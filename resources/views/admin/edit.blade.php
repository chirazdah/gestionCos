
@extends('layouts.app')


@section ('titre')
   Modifier utilisateur
@endsection

@section('content')
        <form action="{{route('admin.users.update',$user)}}" method="POST">
        @csrf
        @method('PATCH')
        @foreach($roles as $role)
        <div class="form-group form-check" >
                <input type ="checkbox" class ="form-check-input" name = "roles[]" value ="{{ $role->id}}" id ="{{$role->id}}"
                  @foreach($user->roles as $userrole)
                         @if ($userrole->id === $role->id)
                                        checked
                        @endif
                   @endforeach 
                >
                <label for="{{$role->id}}" class = "form-check-label">{{$role->name}}</label>
        </div>

        @endforeach

        <button type ="submit" class = "btn btn-primary">Modifier les roles</button>
        </form>
@endsection
