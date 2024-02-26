<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">
                @if (Route::is('admin.blogs.index'))
                    Lista de Blogs
                @elseif(Route::is('admin.blogs.create'))
                    Crear Nuevo Blog    
                @elseif(Route::is('admin.blogs.edit'))
                    Editar Blog <span class="badge badge-info">{{ $blog->title }}</span>
                @elseif(Route::is('admin.blogs.show'))
                    Ver Blog <span class="badge badge-info">{{ $blog->title }}</span>
                    <a  class="btn btn-outline-success btn-sm" href="{{ route('admin.blogs.edit', $blog->id) }}"> <i class="fa fa-edit"></i></a>
                @endif
            </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Inicio</a></li>
                        @if (Route::is('admin.blogs.index'))
                            <li class="breadcrumb-item active" aria-current="page">Lista de Blogs</li>
                        @elseif(Route::is('admin.blogs.create'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Lista de Blogs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Crear Nuevo Blog</li>
                        @elseif(Route::is('admin.blogs.edit'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Lista de Blogs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Blog</li>
                        @elseif(Route::is('admin.blogs.show'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Lista de Blogs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mostrar Blog</li>
                        @endif
                        
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>