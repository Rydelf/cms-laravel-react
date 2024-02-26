@extends('backend.layouts.master')

@section('title')
    @include('backend.pages.blogs.partials.title')
@endsection

@section('admin-content')
    @include('backend.pages.blogs.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
            <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" data-parsley-validate data-parsley-focus="first">
                @csrf
                @method('put')
                <div class="form-body">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="title">Título de Blog <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" placeholder="Título" required=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Siglas <span class="optional">(opcional)</span></label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $blog->slug }}" placeholder="Ingrese siglas (Deje en blanco para completar automáticamente)" />
                                </div>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Imagen Relacionada <span class="optional">(opcional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="image" name="image" data-default-file="{{ $blog->image != null ? asset('public/assets/images/blogs/'.$blog->image) : null }}"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label class="control-label" for="status">Estado <span class="required">*</span></label>
                                    <select class="form-control custom-select" id="status" name="status" required>
                                        <option value="1" {{ $blog->status === 1 ? 'selected' : null }}>Activo</option>
                                        <option value="0" {{ $blog->status === 0 ? 'selected' : null }}>Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Descripción <span class="optional">(opcional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="description" name="description">{!! $blog->description !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="meta_description">Descripción Interna <span class="optional">(opcional)</span></label>
                                    <textarea type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Descripción Interna">{!! $blog->meta_description !!}</textarea>
                                </div>
                                <div class="form-actions">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Guardar</button>
                                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-dark">Cancelar</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                    
                </div>
            </form>
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