@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        
        <div class="col-md-6">
        
       
            <div class="card bg-light">
                <div class="card-header"><h2>Perfil de: {{ Auth::user()->name }}</h2>  
                

                </div>
                </br>
                <div class="mx-auto">
                 <img width="200px" height="200px" class="border border-dark" src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}" >                    
        
        
              </div> 
                <div class="card-body mx-auto">                
                    <perfil-component />
                </div>
                <div class="form-group">
                        
                        <div class="col-lg-12 col-lg-offset-2 ">
                            <div class="align-bottom ">
                                <h4>Editar avatar</h4>
                                            {{ Form::open(['route' => ['user.profile.update'], 'files' => true, 'method' => 'PATCH'] ) }}
                                            </br>
                                            
                                            <p class="btn btn-secondary">{{ Form::file('avatar') }}</p>
                                            <p class="btn btn-secondary">{{ Form::submit('Actualizar', ['name' => 'submit'] ) }}</p>
                                            {{ Form::close() }}
                            </div>
                        </div>     
                </div>    
                

                
      
            </div>
                
        </div>
        

        @if(Auth::user()->id == 1)    
             
        <div class = "col-md-12">
        </br>
        
            <div class="card ">
                <div class="card-text p-3 mx-auto">
                    <h2>Usuarios registrados en BCP</h2>
                    {{ $users->links() }}
                </div>
                <table class="table table-striped p-1 bg-dark text-white">
                
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Operaciones</th>
                    </tr>
                    
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->cedula }}</td>
                        <td>{{ $user->telefono }}</td>
                        <td>
                            <a class="btn btn-danger" href="{{route('user.delete',['id' => $user->id])}}" onclick="return confirm('Seguro queires eliminar a este usuario?')" >
                                Eliminar
                            </a>
                        </td>
                    </tr>
                    

                    @endforeach  
                    
            </div>

        </div>
        @endif  
    </div>
    
</div>
@endsection
