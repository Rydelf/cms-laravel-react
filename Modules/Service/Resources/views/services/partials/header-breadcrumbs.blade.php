<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">
                @if (Route::is('admin.services.index'))
                    Lista de Servicios
                @elseif(Route::is('admin.services.create'))
                    Crear Nuevo Servicio
                @elseif(Route::is('admin.services.edit'))
                    Editar Servicio <span class="badge badge-info">{{ $service->title }}</span>
                @elseif(Route::is('admin.services.show'))
                    Ver Servicio <span class="badge badge-info">{{ $service->title }}</span>
                    <a  class="btn btn-outline-success btn-sm" href="{{ route('admin.services.edit', $service->id) }}"> <i class="fa fa-edit"></i></a>
                @endif
            </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Inicio</a></li>
                        @if (Route::is('admin.services.index'))
                            <li class="breadcrumb-item active" aria-current="page">Lista de Servicios</li>
                        @elseif(Route::is('admin.services.create'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Lista de Servicios</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Crear Nuevo Servicio</li>
                        @elseif(Route::is('admin.services.edit'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Lista de Servicios</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Servicio</li>
                        @elseif(Route::is('admin.services.show'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Lista de Servicios</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mostrar Servicio</li>
                        @endif

                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
