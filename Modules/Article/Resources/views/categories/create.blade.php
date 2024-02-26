@extends('backend.layouts.master')

@section('title')
    @include('article::categories.partials.title')
@endsection

@section('styles')

@endsection

@section('admin-content')
    @include('article::categories.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
            <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate data-parsley-focus="first">
                @csrf
                <div class="form-body">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">Nombre Categoría <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre Categoría" required=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Siglas <span class="optional">(opcional)</span></label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Ingrese Abreviación (Dejar en blanco para generar automáticamente.)" />
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="parent_category_id">Categoría Padre <span class="optional">(opcional)</span></label>
                                    <br>
                                    <select class="parent_categories_select form-control custom-select " id="parent_categories" name="parent_category_id" style="width: 100%;">
                                        <option value="">Seleccione Categoría Padre</option>
                                        {!! $categories !!}
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="priority">Mostrar prioridad en el sitio <span class="optional">(opcional)</span></label>
                                    <input type="number" class="form-control" id="priority" name="priority" value="{{ old('priority') }}" placeholder="Ingrese Prioridad (Baja=Alta); eg-1" min="0"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group has-success">
                                    <label class="control-label" for="status">Estado <span class="required">*</span></label>
                                    <select class="form-control custom-select" id="status" name="status" required>
                                        <option value="1" {{ old('status') == "1" ? 'selected' : null }}>Activa</option>
                                        <option value="0" {{ old('status') == "0" ? 'selected' : null }}>Inactiva</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="banner_image">Imagen de categoría <span class="optional">(opcional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="banner_image" name="banner_image" value="{{ old('banner_image') }}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="logo_image">Logo de categoría <span class="optional">(opcional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="logo_image" name="logo_image" value="{{ old('logo_image') }}"/>
                                </div>
                            </div>
                        </div>


                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="description">Descripción <span class="optional">(opcional)</span></label>
                                    <textarea type="text" class="form-control tinymce_simple" id="description" name="description" value="{{ old('description') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="meta_description">Descripción Interna <span class="optional">(opcional)</span></label>
                                    <textarea type="text" class="form-control" id="meta_description" name="meta_description" value="{{ old('meta_description') }}" placeholder="Descripción Interna"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="enable_bg" name="enable_bg">
                                            <label class="custom-control-label" for="enable_bg">
                                                <strong>Habilitar Color</strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 enable_bg_area display-hidden">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="text_color">Color de Texto</label>
                                                        <input type="text" id="text_color" name="text_color" class="form-control jscolor" value="000000" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="bg_color">Color de Fondo</label>
                                                    <input type="text" id="bg_color" name="bg_color" class="form-control jscolor" value="eeeeee" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Guardar</button>
                                    <a href="{{ route('admin.categories.index') }}" class="btn btn-dark">Cancelar</a>
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
@include('article::categories.partials.scripts')
@endsection
