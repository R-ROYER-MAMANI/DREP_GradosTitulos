@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear usuario títulado</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{$error}}</span>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            
                            <form action="{{ route('usuariotitulados.store') }}" method="POST">
                                @csrf
                                <div class="row">
 
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Código Modular y Nombre Institución</label>
                                            <select name="nombreinstitucion_id" class="form-control">
                                                @foreach ($nombreinstitucions as $nombreinstitucion)
                                                    <option value="{{ $nombreinstitucion['id'] }}">{{ $nombreinstitucion['COD_MOD'] }} {{ $nombreinstitucion['IE_NOMBRE'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Apellido Paterno</label>
                                            <input type="text" name="APE_PAT" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Apellido Materno</label>
                                            <input type="text" name="APE_MAT" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Nombres</label>
                                            <input type="text" name="NOMBRES" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Tipo Documento</label> 
                                            <select type="text" class="form-control input input__select mb-4 px-2 col-md-12" name="DOCU_TIP">
                                                <option value="DNI">DNI</option>
                                                <option value="CE">CE</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">N° Documento</label>
                                            <input type="text" name="DOCU_NUM" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Número del Título</label>
                                            <input type="text" name="NUM_TITU" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Nombre del Título</label>
                                            <input type="text" name="NOMBRE_TITU" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Nivel Formativo</label>
                                            <select name="nivelformacion_id" class="form-control">
                                                @foreach ($nivelformacions as $nivelformacion)
                                                    <option value="{{ $nivelformacion['id'] }}">{{ $nivelformacion['FORMACION'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Fecha emisión del título</label>
                                            <input type="date" name="TITU_FEC" class="form-control">
                                            <span>día/mes/año</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">N° Registro título</label>
                                            <input type="text" name="REG_TITU_NUM" class="form-control"></input>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">N° Aprobación título</label>
                                            <input type="text" name="RESO_TITU_NUM" class="form-control"></input>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Fecha registro en DRE</label>
                                            <input type="date" name="REG_TITU_FEC" class="form-control"></input>
                                            <span>día/mes/año</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Registro título en libro de la Institución</label>
                                            <input type="text" name="REG_TITU_LIBRO" class="form-control"></input>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">N° Folio</label>
                                            <input type="text" name="FOLIO_TITU_NUM" class="form-control"></input>
                                            <span>Indicar el número de folio que figura registrado el título en la institución</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Director</label>
                                            <select name="usuarioadministrativo_idDIR" class="form-control">
                                                @foreach ($usuarioadministrativos as $usuarioadministrativo)
                                                    <option value="{{ $usuarioadministrativo['id'] }}">{{ $usuarioadministrativo['NOMBRE'] }} {{ $usuarioadministrativo['APE_P'] }} {{ $usuarioadministrativo['APE_M'] }} {{ $usuarioadministrativo->cargo->NOMBRE_CARGO }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Secretario Académico</label>
                                            <select name="usuarioadministrativo_idSA" class="form-control">
                                                @foreach ($usuarioadministrativos as $usuarioadministrativo)
                                                    <option value="{{ $usuarioadministrativo['id'] }}">{{ $usuarioadministrativo['NOMBRE'] }} {{ $usuarioadministrativo['APE_P'] }} {{ $usuarioadministrativo['APE_M'] }} {{ $usuarioadministrativo->cargo->NOMBRE_CARGO }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Secretario General de la DRE</label>
                                            <select name="usuarioadministrativo_idSG" class="form-control">
                                                @foreach ($usuarioadministrativos as $usuarioadministrativo)
                                                    <option value="{{ $usuarioadministrativo['id'] }}">{{ $usuarioadministrativo['NOMBRE'] }} {{ $usuarioadministrativo['APE_P'] }} {{ $usuarioadministrativo['APE_M'] }} {{ $usuarioadministrativo->cargo->NOMBRE_CARGO }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">RESPONSABLE DE ACTAS Y CERTIFCADOS</label>
                                            <select name="usuarioadministrativo_idRAC" class="form-control">
                                                @foreach ($usuarioadministrativos as $usuarioadministrativo)
                                                    <option value="{{ $usuarioadministrativo['id'] }}">{{ $usuarioadministrativo['NOMBRE'] }} {{ $usuarioadministrativo['APE_P'] }} {{ $usuarioadministrativo['APE_M'] }} {{ $usuarioadministrativo->cargo->NOMBRE_CARGO }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

