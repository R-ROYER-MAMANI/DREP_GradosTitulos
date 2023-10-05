@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">IE</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-nombreinstitucion')
                            <a class="btn btn-warning" href="{{ route('nombreinstitucions.create') }}">Nuevo</a>
                            @endcan
                            
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">CÓDIGO MODULAR DE LA INSTITUCIÓN EDUCATIVA</th>
                                    <th style="color: #fff;">NOMBRE DE LA INSTITUCIÓN</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($nombreinstitucions as $nombreinstitucion)
                                        <tr>
                                            <td style="display: none;">{{ $nombreinstitucion->id }}</td>
                                            <td>{{ $nombreinstitucion->COD_MOD }}</td>
                                            <td>{{ $nombreinstitucion->IE_NOMBRE }}</td>
                                            <td>
                                                <form action="{{ route('nombreinstitucions.destroy',$nombreinstitucion->id) }}" method="POST">
                                                    @can('editar-nombreinstitucion')
                                                    <a class="btn btn-info" href="{{ route('nombreinstitucions.edit',$nombreinstitucion->id) }}">Editar</a>
                                                    @endcan

                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-nombreinstitucion')
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
                                {!! $nombreinstitucions->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

