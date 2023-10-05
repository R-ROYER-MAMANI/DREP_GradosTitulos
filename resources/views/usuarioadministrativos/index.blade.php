@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Administrativos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-usuarioadministrativo')
                            <a class="btn btn-warning" href="{{ route('usuarioadministrativos.create') }}">Nuevo</a>
                            @endcan
                            
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">NOMBRE</th>
                                    <th style="color: #fff;">APELLIDO PATERNO</th>
                                    <th style="color: #fff;">APELLIDO MATERNO</th>
                                    <th style="color: #fff;">APELLIDO DNI</th>
                                    <th style="color: #fff;">CARGO</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($usuarioadministrativos as $usuarioadministrativo)
                                        <tr>
                                            <td style="display: none;">{{ $usuarioadministrativo->id }}</td>
                                            <td>{{ $usuarioadministrativo->NOMBRE }}</td>
                                            <td>{{ $usuarioadministrativo->APE_P }}</td>
                                            <td>{{ $usuarioadministrativo->APE_M }}</td>
                                            <td>{{ $usuarioadministrativo->DNI }}</td>
                                            <td> <span class="badge badge-success">{{ $usuarioadministrativo->cargo->NOMBRE_CARGO}} </span></td>
                                            <td>
                                                <form action="{{ route('usuarioadministrativos.destroy',$usuarioadministrativo->id) }}" method="POST">
                                                    @can('editar-usuarioadministrativo')
                                                    <a class="btn btn-info" href="{{ route('usuarioadministrativos.edit',$usuarioadministrativo->id) }}">Editar</a>
                                                    @endcan

                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-usuarioadministrativo')
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
                                {!! $usuarioadministrativos->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

