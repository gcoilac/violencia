@extends('layouts.plantilla')

@section('title', 'home')

@push('styles')
<style>
    header {
    padding: 10px 20px;
    height: 100vh;
  }
  .color-menu {
    background-color: var(--hospital-green);
  }
  .login-acount {
    font-size: var(--sm);
  }
  .title-head,
  .title-acount {
    margin: 40px;
  }
</style>
@endpush

@section('content')

    <header>
        <section>
        <div class="title-menu">
            <p class="sidenav-trigger" data-target="mobile-nav" id="menu-sidenav">
            <i class="material-icons icon-menu">menu</i>
            </p>
        </div>
        <form>
            <ul class="sidenav sidenav-fixed color-menu" id="mobile-nav">
            <p class="title-head">
                <span class="black-text"
                  >Orientacion y asistencia en casos de violencia.</span
                >
              </p>
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Analisis</a></li>
              <li><a href="#">Orientacion</a></li>
              <li><a href="#">Comunicacion</a></li>
              <div class="title-acount">
                <div>
                  <a href="#">Crear cuenta</a>  
                </div>
                <spam class="login-acount">
                  <a href="">Acceder</a>
                </spam>
              </div>
            </ul>
          </form>
        </section>
      </header>
      @push('scripts')
      <script>
        $(document).ready(function () {
        $(".sidenav").sidenav();
        });
        $(".dropdown-trigger").dropdown();
      </script>
        @endpush
@endsection
