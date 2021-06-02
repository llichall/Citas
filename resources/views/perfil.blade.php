
@extends('layouts.app')

@section('content')

<header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
               
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0"> 
                @foreach($res as $usuario)
                 @if($usuario['id']==$id)

                 <div class="divider-custom divider-light">
                    <div class="divider-custom-line">{{$usuario['name']}}</div>
                 
                    <div class="divider-custom-line"></div>
                </div>
                 @endif 
                @endforeach</h1>

                    <div class="container mt-5 d-flex justify-content-center">
        <div class="card p-3">
            <div class="d-flex align-items-center">
                <div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="155"> </div>
                <div class="ml-3 w-100">
                  <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                        <div class="d-flex flex-column"> <span class="articles"> imagenes</span> <span class="number1">8</span> </div>
                        <div class="d-flex flex-column"> <span class="followers">| seguidores |</span> <span class="number2">980</span> </div>
                        <div class="d-flex flex-column"> <span class="rating"> aceptacion</span> <span class="number3">8.9</span> </div>
                    </div>
                    <div class="button mt-2 d-flex flex-row align-items-center"> <button class="btn btn-sm btn-outline-primary w-100">Chat</button> <button class="btn btn-sm btn-primary w-100 ml-2">Follow</button> </div>
             </div>
        </div>
        </div>
</div>
                  <p class="masthead-subheading font-weight-light mb-0">este es su perfil</p>
            </div>
        </header>
@endsection

