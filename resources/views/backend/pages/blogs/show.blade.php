@extends('backend.layouts.master')

@section('title')
    @include('backend.pages.blogs.partials.title')
@endsection

@section('admin-content')
    @include('backend.pages.blogs.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
                <div class="form-body">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="title">Título de Blog</label>
                                    <br>
                                    {{ $blog->title }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Siglas</label>
                                    <br>
                                    {{ $blog->slug }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Imagen Relacionada</label>
                                    <br>
                                    @if ($blog->image != null)
                                    <img src="{{ asset('public/assets/images/blogs/'.$blog->image) }}" alt="Image" class="img width-100" />
                                    @else 
                                    <span class="border p-2">
                                        Sin imagen
                                    </span>
                                    @endif
                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label class="control-label" for="status">Estado</label>
                                    <br>
                                    {{ $blog->status === 1 ? 'Activo' : 'Inactivo' }}
                                </div>
                            </div>
                        </div>
                    
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Descripción</label>
                                    <div>
                                        {!! $blog->description !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="meta_description">Descripción Interna</label>
                                    <div>
                                        {!! $blog->meta_description !!}
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="card-body">
                                        <a  class="btn btn-success" href="{{ route('admin.blogs.edit', $blog->id) }}"> <i class="fa fa-edit"></i> Editar</a>
                                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-dark ml-2">Cancelar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    $(".categories_select").select2({
        placeholder: "Seleccione una Categoría"
    });
    </script>
@endsection