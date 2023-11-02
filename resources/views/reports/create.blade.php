@extends('layouts.plantilla')

@section('title', 'create')

@push('styles')
<style>
    .content-form {
      width: 100%;
      height: 100vh;
      display: grid;
    }
    .order-form {
      display: grid;
      grid-template-rows: auto 1fr auto;
      border: 1px solid var(--hospital-green);
      border-radius: 10px;
      padding: 15px;
    }
    .captcha-content {
      border: 1px solid var(--black);
      border-radius: 8px;
      padding: 10px;
      width: 300px;
    }
    .image-captha {
      width: 280px;
      display: flex;
      justify-content: space-between;
      border: 1px solid var(--text-input-field);
      border-radius: 8px;
      align-items: center;
      margin: auto;
      padding: 10px;
    }
    .image-captha img {
      width: 30px;
    }

    .primary-button {
      background-color: var(--very-light-pink);
      border-radius: 8px;
      border: none;
      color: var(--white);
      width: 100%;
      cursor: pointer;
      font-size: var(--md);
      font-weight: bold;
      height: 50px;
    }
    .login-button {
      margin-top: 14px;
      margin-bottom: 30px;
    }
  </style>
@endpush

@section('content')
    <article class="content-form">
        <h5>Crear nuevo formulario de denuncia</h5>
        <section class="row order-form">
          {{-- {{route('reports.store')}} method="POST" --}}
          <form action="{{route('reports.store')}}" method="POST" class="col s12 form-one">

            @csrf

            <div class="row">
              <div class="col s12">
                <label>Responda formulario</label>
                <select name="participacion" class="browser-default" value="{{old('participacion')}}">
                  <option value="" disabled selected>
                    ¿Participacion?
                  </option> 
                  <option value="victima">victima</option>
                  <option value="denunciante">denunciante</option>
                  <option value="agresor">agresor</option>
                </select>
                @error('participacion')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
              </div>
            </div>
            <div class="row">
              <div class="col s6">
                <label for="name">Nombre</label>
                <input name="name" id="name" type="text" class="validate" value="{{old('name')}}"/>
                @error('name')
                    <p><strong>{{$message}}</strong></p>
                @enderror
              </div>
              <div class="col s6">
                <label for="apellido">Apellido</label>
                <input name="apellido" id="apellido" type="text" class="validate" value="{{old('apellido')}}"/>
                @error('apellido')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
              </div>
            </div>
            <div class="row">
              <div class="col s5">
                <label for="fecha_nac">fecha Nacimiento</label>
                <input name="fecha_nac" id="fecha_nac" type="date" class="validate" value="{{old('fecha_nac')}}"/>
                @error('fecha_nac')
                    <p><strong>{{$message}}</strong></p>
                @enderror
              </div>
              <div class="col s3">
                <label for="edad">Edad</label>
                <input name="edad" id="edad" type="number"" class="validate" value="{{old('edad')}}"/>
                @error('edad')
                    <p><strong>{{$message}}</strong></p>
                @enderror
              </div>
              <div class="col s4">
                <label for="estado_civil">Estado civil</label>
                <input name="estado_civil" id="estado_civil" type="text"" class="validate" value="{{old('estado_civil')}}"/>
                @error('estado_civil')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
              </div>
            </div>
            <div class="row">
              <div class="col s6">
                <label for="nro_contacto">Nro Contacto</label>
                <input name="nro_contacto" id="nro_contacto" type="text" class="validate" value="{{old('nro_contacto')}}"/>
                @error('nro_contacto')
                    <p><strong>{{$message}}</strong></p>
                @enderror
              </div>
              <div class="col s6">
                <label for="natural_de">Natural de</label>
                <input name="natural_de" id="natural_de" type="text" class="validate" value="{{old('natural_de')}}"/>
                @error('natural_de')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <label for="domicilio">Domicilio</label>
                <input name="domicilio" id="domicilio" type="text" class="validate" value="{{old('domicilio')}}"/>
                @error('domicilio')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
              </div>
            </div>
            <div class="row">
              <div class="col s6">
                <div class="inline">
                  <label for="email">Email</label>
                  <input name="email" id="email" type="email" class="validate" value="{{old('email')}}"/>
                </div>
                @error('email')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <label>Seleccione tipo de violencia que se genera:</label>
                <select name="tipo" class="browser-default" value="{{old('tipo')}}">
                  <option value="" disabled selected>Violencia de: </option>
                  <option value="genero">genero</option>
                  <option value="intrafamiliar">intrafamiliar</option>
                  <option value="bullying">bullying</option>
                </select>
                @error('tipo')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea name="declaracion" id="declaracion" class="materialize-textarea">{{old('declaracion')}}</textarea>
                <label for="declaracion">Declaracion</label>
                @error('declaracion')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
              </div>
            </div>
            <button data-target="modal1" class="btn modal-trigger">Denunciar</button>
            
          <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <ul class="collection">
        <li class="collection-item avatar">
          <i class="material-icons circle">folder</i>
          <p class="title"><b>Datos Denuncia</b></p>
          <p>Participacion: <br>
            Nombre:<br>
            Apellido:<br>
            Fecha de nacimiento:<br>
            Edad:<br>
            Estado civil:<br>
            Nro. contacto:<br>
            Natural de:<br>
            Domicilio:<br>
            Email:<br>
            tipo:<br>
            declaracion:
          </p>
          <span class="secondary-content"><i class="material-icons">grade</i></span>
        </li>
      </ul>
    </div>
    <div class="modal-footer">
      <input
            type="submit"
            value="Aceptar"
            class="modal-close waves-effect waves-green btn-flat"
          />
    </div>
  </div>
          </form>
          <form class="col s12 form-three">
            <center>VICTIMA</center>
            <div class="row">
              <div class="col s12">
                <label>Responda</label>
                <select class="browser-default">
                  <option value="" disabled selected>
                    ¿Conoce usted al Agresor?
                  </option>
                  <option value="1">si</option>
                  <option value="2">no</option>
                </select>
              </div>
            </div>
          </form>
          <form class="col s12 form-four">
            <center>AGRESOR</center>
            <div class="row">
              <div class="col s6">
                <label for="relative">Parentesco</label>
                <input id="relative" type="text" class="validate" />
              </div>
            </div>
          </form>
          <form class="col s12 form-five">
            <center>DENUNCIANTE</center>
            <div class="row">
              <div class="col s12">
                <label>Responda</label>
                <select class="browser-default">
                  <option value="" disabled selected>¿Reservar identidad?</option>
                  <option value="1">Si</option>
                  <option value="2">No</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col s6">
                <div class="inline">
                  <label for="bond">Vinculo con la victima</label>
                  <input id="bond" type="text" class="validate" />
                </div>
              </div>
            </div>
          </form>
          <div class="captcha-content">
            <center>Captcha</center>
            <p class="image-captha">
              <label>
                  <input type="checkbox"" name="captcha" />
                  <span>Im not a robot</span>
                </label>
                <i class="material-icons">refresh</i>
              {{-- <img src="captcha.png" alt="captcha" /> --}}
            </p>
          </div>
          <input
            type="submit"
            value="Denunciar"
            class="primary-button login-button"
          />
        </section>
        <section>
          <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light red">
              <i class="material-icons">add</i>
            </a>
            <ul>
              <li>
                <a class="btn-floating red"><i class="material-icons">call</i></a>
              </li>
              <li>
                <a class="btn-floating yellow darken-1"
                  ><i class="material-icons">help</i></a
                >
              </li>
              <li>
                <a class="btn-floating green"
                  ><i class="material-icons">add_alert</i></a
                >
              </li>
            </ul>
          </div>
        </section>
      </article>
      @push('scripts')
        <script>
            $("#textarea1");
            M.textareaAutoResize($("#textarea1"));

            $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });
  $(document).ready(function(){
    $('.modal').modal();
  });
        </script>
      @endpush
@endsection
