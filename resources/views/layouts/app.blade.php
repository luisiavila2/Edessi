<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edessi - Empresa de desarrollo de software y sericios informáticos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.png')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="{{asset('js/tailwindcss.js')}}"></script>
        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    </head>
    <body id="page-top">

        {{-- <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="{{asset('assets/img/publicidad/capacitacion.jpg')}}"
                  class="block w-full"
                  alt="..."
                />
                
                <div class="carousel-caption hidden md:block absolute text-center">
                  <h5 class="text-xl">First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="{{asset('assets/img/publicidad/datos.jpg')}}"
                  class="block w-full"
                  alt="..."
                />
                <div class="carousel-caption hidden md:block absolute text-center">
                  <h5 class="text-xl">Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="{{asset('assets/img/publicidad/programacion.jpg')}}"
                  class="block w-full"
                  alt="..."
                />
                <div class="carousel-caption hidden md:block absolute text-center">
                  <h5 class="text-xl">Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> --}}

        <!-- Navigation-->
        <img src="{{asset('assets/img/baner.png')}}" alt="..." />
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{url('index.php/#services')}}">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('index.php/#portfolio')}}">Portafolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('index.php/#about')}}">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('index.php/#team')}}">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('index.php/#contact')}}">Contáctenos</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="min-h-screen bg-gray-100">

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
        @stack('modals')

        @livewireScripts


    {{--   <!-- About-->
     <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">EDESSI</h2>
                <h3 class="section-subheading text-muted">Brindamos un servicio especializado y moderno donde la satisfación del cliente es la prioridad.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">¿Por qué EDESSI?</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Anticipamos tus necesidades y colaboramos en la elección del mejor producto o servicio  que atienda a sus necesidades para que alcances una experiencia más simple y adecuada.
                                </p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        </div>
                        <div class="timeline-body"><p class="text-muted">
                            Nuestros productos y servicios son únicos, modernos y amigables, su utilización incrementará tus ganancias y hará que atraigas potenciales clientes a tu negocio. Con nuestra asistencia lograrás fidelizar a tus clientes así como aumentar la presencia y reconocimiento de tu marca en el mercado.
                        </p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        </div>
                        <div class="timeline-body"><p class="text-muted">Utilizamos en el desarrollo de nuestros software y sistemas metodologías ágiles para que tus recursos tecnológicos sean eficientes, productivos y seguros. Contamos con profesionales bien preparados y calificados que harán te sientas a gusto con nuestros productos y servicios.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4></h4>
                            <h4 class="subheading"></h4>
                            <br>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Impulsamos tecnológicamente a tu negocio ofreciéndote soluciones innovadoras para la transformación digital que requiere tu empresa.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <a href="#">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="assets/img/about/5.jpg" alt="..." />
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nuestro equipo de trabajo</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>Luis E. Castillo</h4>
                        <p class="text-muted">Manager</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                        <h4>Roberto García</h4>
                        <p class="text-muted">Diseñador</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                        <h4>Luis Humberto</h4>
                        <p class="text-muted">Esp. Informático</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/4.jpg" alt="..." />
                        <h4>Ramón Fajardo</h4>
                        <p class="text-muted">Desarrollador</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Trabajamos de conjunto con el cliente para brindarle el mejor de los servicios.</p></div>
            </div>
        </div>
    </section>
     <!-- Contact-->
     <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contáctenos</h2>
                <h3 class="section-subheading text-muted">Solicite nuestros servicios</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Nombre *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es requerido</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">El email es requerido.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">El email no es válido</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Teléfono *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Es requerido un número telefónico</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Su mensaje *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es requerido</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button></div>
            </form>
        </div>
    </section> --}}
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>