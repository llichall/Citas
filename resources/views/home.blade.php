@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background:#733b46;">
                <div class="card-header text-center" style="color:#fff;"  >{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                    <!-- Navigation-->
        
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
              
                <div class="masthead-heading text-uppercase text-center" style="color:#fff;" >Encantado de conocerte <p></div>
                <a class="btn btn-primary btn-xl text-uppercase text-center" href="#services ">Historias </a>
            </div>
        </header>
        
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                <h2 class="section-heading text-uppercase"><p></h2>
                    <h2 class="section-heading text-uppercase" style="color:#fff;" >OBJETIVOS</h2>
                    <h3 class="section-subheading text-muted" style="color:#fff;" >¿Que es lo que queremos lograr?</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" style="color:#fff;" >citas</h4>
                        <p class="text-muted"  style="color:#fff;" >lograr que las personas cercanas que tengan interes mutuo puedan iniciar una conversacion y quedar en una cita</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" style="color:#fff;" >citas</h4>
                        <p class="text-muted">lograr que las personas cercanas que tengan interes mutuo puedan iniciar una conversacion y quedar en una cita</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" style="color:#fff;" >citas</h4>
                        <p class="text-muted">lograr que las personas cercanas que tengan interes mutuo puedan iniciar una conversacion y quedar en una cita</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Historias</h2>
                    <h3 class="section-subheading text-muted">parejas que junto Huanuco citas</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/p1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center">Juan y Maria</div>
                                <div class="portfolio-caption-subheading text-muted">Apenas termino de contar que conocí a Diego –mi novio desde hace casi año y medio– por una aplicación de celular, me siento inmediatamente forzada a justificar que a pesar de lo horrible y vacío que eso suena, mi relación de verdad es seria, que soy muy feliz, que realmente estoy enamorada, que es mi mejor amigo, que nuestra relación es igual de genuina que muchas otras con inicios menos “vergonzosos”</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/p2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center">Marco y Jemima</div>
                                <div class="portfolio-caption-subheading text-muted">Apenas termino de contar que conocí a Diego –mi novio desde hace casi año y medio– por una aplicación de celular, me siento inmediatamente forzada a justificar que a pesar de lo horrible y vacío que eso suena, mi relación de verdad es seria, que soy muy feliz, que realmente estoy enamorada, que es mi mejor amigo, que nuestra relación es igual de genuina que muchas otras con inicios menos “vergonzosos”</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/p4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center">Luis y Yhajaira</div>
                                <div class="portfolio-caption-subheading text-muted">Apenas termino de contar que conocí a Diego –mi novio desde hace casi año y medio– por una aplicación de celular, me siento inmediatamente forzada a justificar que a pesar de lo horrible y vacío que eso suena, mi relación de verdad es seria, que soy muy feliz, que realmente estoy enamorada, que es mi mejor amigo, que nuestra relación es igual de genuina que muchas otras con inicios menos “vergonzosos”</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/p2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center">Mandir y TEfy</div>
                                <div class="portfolio-caption-subheading text-muted">Apenas termino de contar que conocí a Diego –mi novio desde hace casi año y medio– por una aplicación de celular, me siento inmediatamente forzada a justificar que a pesar de lo horrible y vacío que eso suena, mi relación de verdad es seria, que soy muy feliz, que realmente estoy enamorada, que es mi mejor amigo, que nuestra relación es igual de genuina que muchas otras con inicios menos “vergonzosos”</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/p1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center">Pat y Luz</div>
                                <div class="portfolio-caption-subheading text-muted">Apenas termino de contar que conocí a Diego –mi novio desde hace casi año y medio– por una aplicación de celular, me siento inmediatamente forzada a justificar que a pesar de lo horrible y vacío que eso suena, mi relación de verdad es seria, que soy muy feliz, que realmente estoy enamorada, que es mi mejor amigo, que nuestra relación es igual de genuina que muchas otras con inicios menos “vergonzosos”</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/img/p4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center">Alvaro y Clara</div>
                                <div class="portfolio-caption-subheading text-muted">Apenas termino de contar que conocí a Diego –mi novio desde hace casi año y medio– por una aplicación de celular, me siento inmediatamente forzada a justificar que a pesar de lo horrible y vacío que eso suena, mi relación de verdad es seria, que soy muy feliz, que realmente estoy enamorada, que es mi mejor amigo, que nuestra relación es igual de genuina que muchas otras con inicios menos “vergonzosos”</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       
      
      
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
              
                <h2 class="section-heading text-uppercase"><b></h2>
                    <h2 class="section-heading text-uppercase"><b> dejanos tu historia</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <form id="contactForm">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Sus nombres" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Su Historia*" required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar Historia</button>
                    </div>
                </form>
            </div>
     
       
        <script src="js/scripts.js"></script>
    </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
