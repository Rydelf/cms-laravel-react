<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">
                @if (Route::is('admin.roles.index'))
                    Lista de Roles
                @elseif(Route::is('admin.roles.create'))
                    Crear Nuevo Rol    
                @elseif(Route::is('admin.roles.edit'))
                    Editar Rol <span class="badge badge-info">{{ $role->name }}</span>
                @elseif(Route::is('admin.roles.show'))
                    Ver Rol <span class="badge badge-info">{{ $role->name }}</span>
                    <a  class="btn btn-outline-success btn-sm" href="{{ route('admin.roles.edit', $role->id) }}"> <i class="fa fa-edit"></i></a>
                @endif
            </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Inicio</a></li>
                        @if (Route::is('admin.roles.index'))
                            <li class="breadcrumb-item active" aria-current="page">Lista de Roles</li>
                        @elseif(Route::is('admin.roles.create'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Lista de Roles</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Crear Nuevo Rol</li>
                        @elseif(Route::is('admin.roles.edit'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Lista de Roles</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Rol</li>
                        @elseif(Route::is('admin.roles.show'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Lista de Roles</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ver Rol</li>
                        @endif
                        
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>