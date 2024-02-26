@extends('backend.layouts.master')

@section('title')
    @include('article::pages.partials.title')
@endsection

@section('admin-content')
    @include('article::pages.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
            <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data"
                data-parsley-validate data-parsley-focus="first">
                @csrf
                <div class="form-body">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="title">Título de Artículo <span
                                            class="required">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ old('title') }}" placeholder="Título" required="" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Siglas <span
                                            class="optional">(opcional)</span></label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        value="{{ old('slug') }}"
                                        placeholder="Ingrese siglas (Deje en blanco para completar automáticamente)" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group has-success">
                                    <label class="control-label" for="status">Estado <span class="required">*</span></label>
                                    <select class="form-control custom-select" id="status" name="status" required>
                                        <option value="1" {{ old('status') === 1 ? 'selected' : null }}>Activo</option>
                                        <option value="0" {{ old('status') === 0 ? 'selected' : null }}>Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="category_id">Categoría de Artículo <span
                                            class="optional">(opcional)</span></label>
                                    <br>
                                    <select class="categories_select form-control custom-select " id="categories"
                                        name="category_id" style="width: 100%;">
                                        {!! $categories !!}
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="article_type_id">Tipo de Artículo <span
                                            class="optional">(opcional)</span></label>
                                    <br>
                                    <select class="form-control custom-select select2" id="types" name="article_type_id"
                                        style="width: 100%;">
                                        <option value="">Seleccionar tipo</option>
                                        @foreach ($article_types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Imagen Relacionada <span
                                            class="optional">(opcional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70"
                                        data-allowed-file-extensions="png jpg jpeg webp" id="image" name="image"
                                        value="{{ old('image') }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="banner_image">Imagen <span
                                            class="optional">(opcional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70"
                                        data-allowed-file-extensions="png jpg jpeg webp" id="banner_image"
                                        name="banner_image" value="{{ old('banner_image') }}" />
                                </div>
                            </div>
                        </div>


                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Descripción <span
                                            class="optional">(opcional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="description"
                                        name="description" value="{{ old('description') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="meta_description">Descripción Interna <span
                                            class="optional">(opcional)</span></label>
                                    <textarea type="text" class="form-control" id="meta_description" name="meta_description"
                                        value="{{ old('meta_description') }}"
                                        placeholder="Descripción Interna"></textarea>
                                </div>
                                <div class="form-actions">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                            Guardar</button>
                                        <a href="{{ route('admin.pages.index') }}" class="btn btn-dark">Cancelar</a>
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