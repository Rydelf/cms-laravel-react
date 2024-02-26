<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">
                @if (Route::is('admin.pages.index'))
                    Lista de Artículos/Páginas
                @elseif(Route::is('admin.pages.create'))
                    Crear Nuevo Artículo/Página
                @elseif(Route::is('admin.pages.edit'))
                    Editar Artículo/Página <span class="badge badge-info">{{ $page->title }}</span>
                @elseif(Route::is('admin.pages.show'))
                    Ver Artículo/Página <span class="badge badge-info">{{ $page->title }}</span>
                    <a  class="btn btn-outline-success btn-sm" href="{{ route('admin.pages.edit', $page->id) }}"> <i class="fa fa-edit"></i></a>
                @endif
            </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Inicio</a></li>
                        @if (Route::is('admin.pages.index'))
                            <li class="breadcrumb-item active" aria-current="page">Lista de Artículos/Páginas</li>
                        @elseif(Route::is('admin.pages.create'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Lista de Artículos/Páginas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Crear Nuevo Artículo Página</li>
                        @elseif(Route::is('admin.pages.edit'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Lista de Artículos/Páginas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Artículo/Página</li>
                        @elseif(Route::is('admin.pages.show'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Lista de Artículos/Páginas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mostrar Artículo/Página</li>
                        @endif

                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
