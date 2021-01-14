<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfólio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v2.4.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">

  @include('theme.header')

  <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url({{ asset('img/post-3.jpg') }})">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Eu sou {{ $user[0]->name }}</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Web Developer, Mobile Developer, Desktop Developer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{ $user[0]->photo }}" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span>{{ $user[0]->name }}</span></p>
                        <p><span class="title-s">Profissão: </span> <span>{{ $user[0]->description }}</span></p>
                        <p><span class="title-s">E-mail: </span> <span>{{ $user[0]->email }}</span></p>
                        <p><span class="title-s">Telefone: </span> <span>{{ $user[0]->telephone }}</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Habilidades</p>
                    @foreach($skills as $rows)
                    <span>{{ $rows->description }}</span> <span class="pull-right">{{ $rows->nivel }}%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: {{ $rows->nivel }}%;" aria-valuenow="{{ $rows->nivel }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Sobre mim
                      </h5>
                    </div>
                    <p class="lead text-justify">
                     {{ $user[0]->abount }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Serviços
              </h3>
              <p class="subtitle-a">
                Nosso serviços disponíveis.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-monitor"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Desenvolvimento Desktop</h2>
                <p class="s-description text-center">
                  Desenvolvimento aplicativos para desktop multiplataforma é a necessidade da vez devido a crescente demanda por projetos de software econômicos e com prazos curtos.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Desenvolvimento Web</h2>
                <p class="s-description text-center">
                  Desenvolvimento de aplicação web, com mais agilidade e utilizando tecnologias inovadoras para oferecer uma melhor experiência em seus sistemas.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Desenvolvimento Mobile</h2>
                <p class="s-description text-center">
                  Desenvolvimento de aplicativos mobile com as mais inovadoras tecnologias.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url({{ asset('img/counters-bg.jpg') }})">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">{{ $total_projects[0]->quant }}</p>
                <span class="counter-text">PROJETOS COMPLETOS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">{{ $user[0]->year }}</p>
                <span class="counter-text">EXPERIÊNCIA</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">{{ $total_clients[0]->quant }}</p>
                <span class="counter-text">TOTAL DE CLIENTES</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfólio
              </h3>
              <p class="subtitle-a">
                Projetos desenvolvidos.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ $projects[0]->photo }}" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{ $projects[0]->photo }}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">{{ $projects[0]->title }}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">{{ $projects[0]->category }}</span> / <span class="w-date">{{ date('d/m/Y', strtotime($projects[0]->date)) }}</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="project/{{ $projects[0]->id }}"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url({{ asset('img/overlay-bg.jpg') }})">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Envie uma mensagem
                      </h5>
                    </div>
                    <div id="msg-success">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Mensagem enviada com sucesso!
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                    </div>
                    <div>
                      <form method="post" id="form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required/>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail" required/>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="title" id="subject" placeholder="Título" required/>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="mesagem" rows="5" placeholder="Mensagem" required></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Enviar sua mensagem</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Fale conosco
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Contate-nos através do formulário abaixo ou através de nossa rede social.
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> {{ $user[0]->address }}</li>
                        <li><span class="ion-ios-telephone"></span> {{ $user[0]->telephone }}</li>
                        <li><span class="ion-email"></span> {{ $user[0]->email }}</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        @foreach($socials as $rows)
                        <li><a href="{{ $rows->link }}"><span class="ico-circle"><i class="{{ $rows->icon }}"></i></span></a></li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @include('theme.footer')
  @include('theme.scrollup')

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendor/counterup/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('vendor/contact/contact.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>