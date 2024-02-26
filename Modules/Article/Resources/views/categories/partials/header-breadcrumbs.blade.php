<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">
                @if (Route::is('admin.categories.index'))
                    Lista de Categorías
                @elseif(Route::is('admin.categories.create'))
                    Crear Nueva Categoría    
                @elseif(Route::is('admin.categories.edit'))
                    Editar Categoría <span class="badge badge-info">{{ $category->name }}</span>
                @endif
            </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Inicio</a></li>
                        @if (Route::is('admin.categories.index'))
                            <li class="breadcrumb-item active" aria-current="page">Lista de Categorías</li>
                        @elseif(Route::is('admin.categories.create'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Lista de Categorías</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Crear Nueva Categoría</li>
                        @elseif(Route::is('admin.categories.edit'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Lista de Categorías</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Categoría</li>
                        @endif
                        
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>