@extends('layouts.app')

@section('content')

<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                      

                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="/img/logo.png"> </div>
                        <h3 class="mb-5 text-center heading">HCO citas</h3>
                        <h6 class="msg-info">Por favor, ingrese a su cuenta</h6>

                        

                        <div class="form-group"> 
                        <label class="form-control-label text-muted">
                        Correo
                        </label> 
                        
                        
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                         <label class="form-control-label text-muted">Contraseña
                        </label> 
                        
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                                                   

                        <div class="row justify-content-center my-3 px-3"> <button type="submit" class="btn-block btn-color"> {{ __('entrar') }}</button> 
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                        </div>
                        <div class="row justify-content-center my-2"> 
                        
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                       
                                    <label class="form-check-label" for="remember ">
                                    <br>
                                        {{ __('Recordad mis datos') }}
                                    </label>
                         </div>
                  


                    </form>


                    </div>
                   
                </div>
                <div class="bottom text-center mb-5">
                  
                </div>
            </div>





            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">:)</h3> <small class="text-white">Hco citas, conoce mas que una amistas 7u7</small>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
