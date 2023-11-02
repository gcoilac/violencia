@extends('layouts.plantilla')

@section('title', 'home')

@push('styles')
<style>
  .color-menu {
    background-color: var(--hospital-green);
  }
  .login-acount {
    font-size: var(--sm);
  }
  .title-head {
    display: flex;
    align-items: center;
    margin: 30px;
  }
  .title-acount {
    margin: 30px;
  }
  .titulo-nav {
    margin-left: 15px; 
  }
              
  @media (min-width: 993px) {
        .has-fixed-sidenav {
          padding-left: 300px;
        }
      }


      .button-align  {
                display: flex;
                justify-content: space-between;        
              }
              .eyes-nav{
                display: flex;
                justify-content: flex-end;        
              }
              .nav-extended {
                padding: 0px 20px;
              }
      
      ul li:last-child {
        font-size: 10px;
      }
      
      .content-card {
        display: flex;
        flex-wrap: wrap;
      }
      .main-page {
        padding: 40px 80px;
      }
      @media (min-width: 1000px) {
        .row .col.m6 {
          width: 33%;
          margin-left: auto;
          left: auto;
          right: auto;
        }
      }
      @media (max-width: 800px) {
        .button-align {
          display: block;
          block-size: auto;
        }
        .button-align a {
          margin: 10px;
        }
      }
</style>
@endpush

@section('content')
<header>
  <ul class="sidenav sidenav-fixed color-menu" id="mobile-nav" style="transform: translateX(-105%);">
  <p class="title-head"> 
    <i class="material-icons black-text">menu</i>
      <span class="black-text titulo-nav">Orientacion y asistencia en casos de violencia.</span>
    </p>
    <li><a href="{{route('home')}}">Dashboard</a></li>
    <li><a href="#">Analisis</a></li>
    <li><a href="#">Orientacion</a></li>
    <li><a href="#">Comunicacion</a></li>
    <div class="title-acount">
      <div>
        <a href="#">Crear cuenta</a>  
      </div>
      <span class="login-acount">
        <a href="">Acceder</a>
      </span>
    </div>
  </ul>
  </header>
  <main class="main-page">
    <header>
      <nav class="nav-extended white">
        <div class="nav-wrapper row">
          <span class="grey-text text-darken-4">Dashboard</span>
          <a href="" data-target="mobile-demo" class="sidenav-trigger left">
            <i class="material-icons black-text">menu</i>
          </a>
          <div class="right input-field">
            <i class="material-icons prefix black-text">search</i>
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Buscador</label>
          </div>
        </div>
        <div class="nav-content button-align ">
          <a href="{{route('reports.create')}}" class="waves-effect waves-light btn-large" id="report">
            <i class="material-icons left">assignment</i> Denuncia
          </a>
          <a class="waves-effect waves-light btn-large" id="question">Cuestionario</a>
          <a class="waves-effect waves-light btn-large" id="rule">Norma vigente</a>
        </div>
        <div class="row">
          <div class="col s12">
            <ul class="tabs eyes-nav">
              <li class="tab">
                <a href="#test1" class="event-link black-text" id="form-eventos">
                  <i class="material-icons left">event</i>Eventos</a>
              </li>
              <li class="tab">
                <a class="complaint-link black-text" href="#test2"  id="form-denuncias">
                  <i class="material-icons left">library_books</i>Denuncias</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
      </header>
          <article>
              <section id="test1" class="col s12">
                <table class="responsive-table">
                  <thead class="table-title">
                    <tr>
                      <th>Nombre Evento</th>
                      <th>Fecha evento</th>
                      <th>Asistiran</th>
                      <th>Agendar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @foreach ($events as $event)
                      <td>
                        {{$event->name}}
                        <p>
                          <i class="tiny material-icons left">check_circle</i>{{$event->activated}}
                        </p>
                      </td>
                      <td>
                        <p>{{$event->fecha_init}}</p>
                        <p>{{$event->fecha_init}}</p>
                      </td>
                      <td>
                        <p>
                          <span><b>{{$event->location}}</b></span>
                        </p>
                        <p>{{$event->tipo}}</p>
                      </td>
                      <td>
                        <i class="material-icons prefix">event</i>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="{{route('events.show', $event->id)}}" class="secondary-content">
                        <i class="material-icons">create</i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <a href="{{route('events.create')}}" class="right"><i class="medium material-icons">add_box</i></a>
                {{$events->links()}} 
              </section>
            <section id="test2" class="col s12">
              <ul class="collection">
                  @foreach ($reports as $report)
                  <li class="collection-item avatar">
                        <i class="material-icons circle">folder</i>
                        <p class="title" id="tipo-violencia">{{$report->tipo}}</p>
                        <p id="participacion">{{$report->name}}</p>
                        <p id="fecha-creacion">{{$report->created_at}}</p>
                        <a href="{{route('reports.show', $report->id)}}" class="secondary-content"
                          ><i class="material-icons">send</i></a
                        >
                      </li>
                    @endforeach
                    {{$reports->links()}}
              </ul>
            </section>
          </article>
          <footer class="content-card">
            <div class="row">
              <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">Card Title</span>
                    <p>
                      I am a very simple card. I am good at containing small bits of
                      information. I am convenient because I require little markup
                      to use effectively.
                    </p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">Card Title</span>
                    <p>
                      I am a very simple card. I am good at containing small bits of
                      information. I am convenient because I require little markup
                      to use effectively.
                    </p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">Card Title</span>
                    <p>
                      I am a very simple card. I am good at containing small bits of
                      information. I am convenient because I require little markup
                      to use effectively.
                    </p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
            </div>
          </footer>
  </main>
      @endsection
      @push('scripts')
      <script>
        $(document).ready(function () {
        $("ul.sidenav").sidenav();
        $(".dropdown-trigger").dropdown();
        });

        
      $(document).ready(function(){
    $('ul.tabs').tabs();
  });

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
      </script>
      @endpush
