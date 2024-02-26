<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">
                @if (Route::is('admin.admins.index'))
                    Lista de Usuarios
                @elseif(Route::is('admin.admins.create'))
                    Crear Nuevo Usuario
                @elseif(Route::is('admin.admins.edit'))
                    Editar Usuario <span class="badge badge-info">{{ $admin->first_name }}</span>
                @elseif(Route::is('admin.admins.profile.edit'))
                    Editar Perfil <span class="badge badge-info">{{ $admin->first_name }}</span>
                @endif
            </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Inicio</a></li>
                        @if (Route::is('admin.admins.index'))
                            <li class="breadcrumb-item active" aria-current="page">Lista de Usuarios</li>
                        @elseif(Route::is('admin.admins.create'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.admins.index') }}">Lista de Usuarios</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Crear Nuevo Usuario</li>
                        @elseif(Route::is('admin.admins.edit'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.admins.index') }}">Lista de Usuarios</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Usuario</li>
                        @elseif(Route::is('admin.admins.profile.edit'))
                        <li class="breadcrumb-item active" aria-current="page">Editar Perfil</li>
                        @endif

                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
