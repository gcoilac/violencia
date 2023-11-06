@extends('layouts.plantilla')

@section('title', 'create')

@push('styles')
<style>
  .create-event {
    width: 100%;
    height: 100vh;
    display: grid;
    place-items: center;
  }
  .contend-form {
    display: grid;
    grid-template-rows: auto 1fr auto;
    width: 300px;
  }
  .form-event {
    border: 1px solid var(--black);
    border-radius: 8px;
    padding: 10px;
    text-align: center;
  }
</style>
@endpush

@section('content')
<article class="create-event">
  <h5>Crear nuevo evento</h5>
  <section class="content-form">
    <form action="{{route('events.store')}}" method="POST" class="col s12 form-event">

      @csrf

      <div class="row">
        <div class="col s12">
          <label for="name_event">Nombre</label>
          <input name="name" id="name_event" type="text" class="validate"  value="{{old('name')}}"/>
          @error('name')
          <p><strong>{{$message}}</strong></p>
          @enderror
        </div>
      </div>


      <div class="row">
        <div class="col s6">
          <label for="init_date">Fecha inicio</label>
          <input name="fecha_init" id="init_date" type="text" class="validate" value="{{old('fecha_init')}}"/>
          @error('fecha_init')
        <p><strong>{{$message}}</strong></p>
        @enderror
        </div>


        <div class="col s6">
          <label for="last_date">Fecha fin</label>
          <input name="fecha_end" id="last_date" type="text" class="validate" value="{{old('fecha_end')}}"/>
          @error('fecha_end')
          <p><strong>{{$message}}</strong></p>
          @enderror
        </div>
      </div>


      <div class="row">
        <div class="col s12">
          <label for="direccion">Lugar</label>
          <input name="location" id="direccion" type="text" class="validate" value="{{old('location')}}"/>
          @error('location')
          <p><strong>{{$message}}</strong></p>
          @enderror
        </div>
      </div>


      {{-- <div class="row">
        <div class="col s12">
          <label> Seleccione evento </label>
          <select name="tipo" class="browser-default" value="{{old('tipo')}}">
            <option value="" disabled selected>Tipo de evento</option>
            <option value="Seminario">Seminario</option>
            <option value="Curso">Curso</option>
            <option value="Exposicion">Exposicion</option>
            <option value="Reunion">Reunion</option>
            <option value="Congreso">Congreso</option>
            <option value="Compartimiento">Compartimiento</option>
          </select>
          @error('tipo')
          <p><strong>{{$message}}</strong></p>
          @enderror
        </div>
      </div> --}}


      {{-- <div class="row">
        <div class="col s12">
          <div class="switch">
            <span>activar evento :</span>
            <label>
              Off
              <input name="activated" type="checkbox"">
              <span class="lever"></span>
              On
            </label>
          </div>
        </div>
      </div> --}}


      <div class="row">
        <div class="input-field col s12">
          <textarea name="description" id="textarea1" class="materialize-textarea">{{old('name')}}</textarea>
          <label for="textarea1">Discripcion</label>
          @error('description')
          <p><strong>{{$message}}</strong></p>
          @enderror
        </div>
      </div>


      <input
            type="submit"
            value="Crear"
            class="btn modal-trigger button-form"
          />
      </div>
    </form>
  </section>
</article>
          
        
      @push('scripts')
        <script>
            $("#textarea1");
            M.textareaAutoResize($("#textarea1"));

            $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });
        </script>
      @endpush
@endsection
