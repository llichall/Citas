
@extends('layouts.app')

@section('content')
<div class ='card mb-4 h-100'>

<div class="input-group">
  <span class="input-group-addon"></span>
  <input type="text" class="form-control" placeholder="Nombre de usuario">
</div>

</div>
            @foreach($user as $usuario)

            
            <div class="container mt-5 d-flex justify-content-center">
                <div class="card p-3">
                    <div class="d-flex align-items-center">
                        <div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="155"> </div>
                        <div class="ml-3 w-100">
                            <h4 class="mb-0 mt-0 text-center">{{$usuario['name']}}</h4> <span></span>
                            <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                                <div class="d-flex flex-column text-center"> <span class="articles">fotos</span> <span class="number1">8</span> </div>
                                <div class="d-flex flex-column text-center"> <span class="followers">| seguidores |</span> <span class="number2">980</span> </div>
                                <div class="d-flex flex-column text-center"> <span class="rating">aceptacion</span> <span class="number3">9</span> </div>
                            </div>
                            <div class="button mt-2 d-flex flex-row align-items-center"> <button class="btn btn-sm btn-outline-primary w-100">Chat</button> <button class="btn btn-sm btn-primary w-100 ml-2">Follow</button> </div>
                        </div>
                    </div>
                </div>
            </div>
                
                @endforeach</h1>



@endsection
