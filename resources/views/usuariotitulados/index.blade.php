@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Titulados</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-13">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-usuariotitulado')
                            <a class="btn btn-warning" href="{{ route('usuariotitulados.create') }}">Nuevo</a>
                            @endcan
                            
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">Código Modular</th>
                                    <th style="color: #fff;">Nombre Institución</th>
                                    <th style="color: #fff;">Apellido Paterno</th>
                                    <th style="color: #fff;">Apellido Materno</th>
                                    <th style="color: #fff;">Nombres</th>
                                    <th style="color: #fff;">Tipo Documento</th>
                                    <th style="color: #fff;">N° Documento</th>
                                    <th style="color: #fff;">Nombre Título</th>
                                    <th style="color: #fff;">Nivel Formativo</th>
                                    <th style="color: #fff;">Emisión del título</th>
                                    <th style="color: #fff;">N° Registro título </th>
                                    <th style="color: #fff;">N° Aprobación título</th>
                                    <th style="color: #fff;">Registro DRE</th>
                                    <th style="color: #fff;">Registro título libro</th>
                                    <th style="color: #fff;">N° Folio</th>
                                    <th style="color: #fff;">Director</th>
                                    <th style="color: #fff;">Secretario Académico</th>
                                    <th style="color: #fff;">Secretaria General DRE</th>
                                    <th style="color: #fff;">Responsable de Actas y Certificados</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($usuariotitulados as $usuariotitulado)
                                        <tr>
                                            <td style="display: none;">{{ $usuariotitulado->id }}</td>
                                            <td>{{ $usuariotitulado->nombreinstitucion->COD_MOD}}</td>
                                            <td>{{ $usuariotitulado->nombreinstitucion->IE_NOMBRE}}</td>
                                            <td>{{ $usuariotitulado->APE_PAT }}</td>
                                            <td>{{ $usuariotitulado->APE_MAT }}</td>
                                            <td>{{ $usuariotitulado->NOMBRES }}</td>
                                            <td>{{ $usuariotitulado->DOCU_TIP }}</td>
                                            <td>{{ $usuariotitulado->DOCU_NUM }}</td>
                                            <td>{{ $usuariotitulado->NOMBRE_TITU }}</td>
                                            <td>{{ $usuariotitulado->nivelformacion->FORMACION }}</td>
                                            <td>{{ $usuariotitulado->TITU_FEC }}</td>
                                            <td>{{ $usuariotitulado->REG_TITU_NUM }}</td>
                                            <td>{{ $usuariotitulado->RESO_TITU_NUM }}</td>
                                            <td>{{ $usuariotitulado->REG_TITU_FEC }}</td>
                                            <td>{{ $usuariotitulado->REG_TITU_LIBRO }}</td>
                                            <td>{{ $usuariotitulado->FOLIO_TITU_NUM }}</td>
                                            <td>{{ $usuariotitulado->usuarioadministrativoDIR->APE_P }} {{ $usuariotitulado->usuarioadministrativoDIR->APE_M }} {{ $usuariotitulado->usuarioadministrativoDIR->NOMBRE }}</td>
                                            <td>{{ $usuariotitulado->usuarioadministrativoSA->APE_P }} {{ $usuariotitulado->usuarioadministrativoSA->APE_M }} {{ $usuariotitulado->usuarioadministrativoSA->NOMBRE }}</td>
                                            <td>{{ $usuariotitulado->usuarioadministrativoSG->APE_P }} {{ $usuariotitulado->usuarioadministrativoSG->APE_M }} {{ $usuariotitulado->usuarioadministrativoSG->NOMBRE }}</td>
                                            <td>{{ $usuariotitulado->usuarioadministrativoRAC->APE_P }} {{ $usuariotitulado->usuarioadministrativoRAC->APE_M }} {{ $usuariotitulado->usuarioadministrativoRAC->NOMBRE }}</td>
                                            <td>
                                                <form action="{{ route('usuariotitulados.destroy',$usuariotitulado->id) }}" method="POST">
                                                    @can('editar-usuariotitulado')
                                                    <a class="btn btn-info" href="{{ route('usuariotitulados.edit',$usuariotitulado->id) }}">Editar</a>
                                                    @endcan

                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-usuariotitulado')
                                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                                    @endcan
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- BTN paginacion de pagina siguente sieguente (aca se aplico unos estilos de Boostrap) -->
                            <!-- Centramos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {!! $usuariotitulados->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



