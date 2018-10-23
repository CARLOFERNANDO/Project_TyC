@extends('layouts.plantilla_admin')


@section("contenido_principal")

    <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Registrar <span>Alumno</span></h2>
                </div>

                <form class="formulario" action="{{ route('alumno.store') }}"  role="form"   method="POST">
                    {{csrf_field()}}
                    <fieldset>
                        <legend>Datos personales</legend>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Nombres</label>
                                <input type="text" class="form-control" name="nombres" required autofocus>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Apellido Paterno</label>
                                <input type="text" class="form-control" name="apellido-paterno" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Apellido Materno</label>
                                <input type="text" class="form-control" name="apellido-materno" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label class="titulo-label">DNI</label>
                                <input type="text" class="form-control" name="dni" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="titulo-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" name="fecha-nacimiento" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="titulo-label">Sexo</label>                            
                                <select  class="form-control" name="sexo">
                                    <option value="m" selected>Masculino</option>
                                    <option value="f">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <br>


                    <fieldset>
                        <legend>Datos Adicionales y de contacto</legend>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Estado Civil</label>                            
                            <select  class="form-control" name="estado-civil">
                                <option value="soltero" selected>Soltero</option>
                                <option value="casado">Casado</option>
                                <option value="viudo">Viudo</option>
                                <option value="divorciado">Divorciado</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Grado de Instrucción</label>                            
                            <select  class="form-control" name="grado-instruccion">
                                <option value="secundaria" selected>Secundaria completa</option>
                                <option value="tecnico">Estudios técnicos</option>
                                <option value="superior">Estudios superiores</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Ocupación</label>
                            <!--                            
                            <select  class="form-control" name="ocupacion">
                                <option value="opcion1" selected>Opción 1</option>
                                <option value="opcion2">Opción 2</option>
                                <option value="opcion3">Opción 3</option>
                            </select>
                            -->
                            <input type="text" class="form-control" name="ocupacion" required>
                        </div>
                    </div>

                    <div class="form-row">           
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Número de celular</label>
                            <input type="number" class="form-control" name="numero" placeholder="Ej. 99999999" required>                       
                        </div>
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Correo electrónico</label>                            
                            <input type="email" class="form-control" name="email" placeholder="Ej. nombre@dominio.com" required>
                        </div>
                    </div>
                    </fieldset>
                    <br>
                    <br>
                    
                    <fieldset >
                        <legend>Dirección</legend>
                        <div class="form-group">
                            <label class="titulo-label">Domicilio</label>
                            <input type="text" class="form-control" name="domicilio" required>                       
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Distrito</label>                            
                                <select  class="form-control" name="distrito">
                                    <option value="" selected>Seleccionar</option>
                                    @foreach($distritos as $dis)
                                        <option value="{{$dis->id}}">{{$dis->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Provincia</label>                            
                                <select  class="form-control" name="provincia">
                                    <option value="" selected>Seleccionar</option>
                                    @foreach($provincias as $prov)
                                        <option value="{{$prov->id}}">{{$prov->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Departamento</label>                            
                                <select  class="form-control" name="departamento">
                                    <option value="" selected>Seleccionar</option>
                                    @foreach($departamentos as $dep)
                                        <option value="{{$dep->id}}">{{$dep->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <div class="botones">
                        <button type="submit" class="btn boton-registrar btn-success col-xs-4">Registrar</button>
                        <button type="reset" class="btn boton-limpiar btn-warning col-xs-4">Limpiar</button>
                    </div>
                </form>
            
    </div>

@endsection