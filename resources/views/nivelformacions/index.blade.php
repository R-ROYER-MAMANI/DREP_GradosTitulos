@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Nivel de formación</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-nivelformacion')
                            <a class="btn btn-warning" href="{{ route('nivelformacions.create') }}">Nuevo</a>
                            @endcan
                            
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">NIVEL FORMATIVO</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($nivelformacions as $nivelformacion)
                                        <tr>
                                            <td style="display: none;">{{ $nivelformacion->id }}</td>
                                            <td>{{ $nivelformacion->FORMACION }}</td>
                                            <td>
                                                <form action="{{ route('nivelformacions.destroy',$nivelformacion->id) }}" method="POST">
                                                    @can('editar-nivelformacion')
                                                    <a class="btn btn-info" href="{{ route('nivelformacions.edit',$nivelformacion->id) }}">Editar</a>
                                                    @endcan

                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-nivelformacion')
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
                                {!! $nivelformacions->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

