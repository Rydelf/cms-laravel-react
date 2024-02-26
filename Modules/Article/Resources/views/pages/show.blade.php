@extends('backend.layouts.master')

@section('title')
    @include('article::pages.partials.title')
@endsection

@section('admin-content')
    @include('article::pages.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
                <div class="form-body">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="title">Título Página</label>
                                    <br>
                                    {{ $page->title }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Siglas</label>
                                    <br>
                                    {{ $page->slug }}
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="category_id">Categoría Página</label>
                                    <br>
                                    {{ $page->category != null ? $page->category->name : '-' }}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label class="control-label" for="status">Estado</label>
                                    <br>
                                    {{ $page->status === 1 ? 'Activa' : 'Inactiva' }}
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Imagen Relacionada</label>
                                    <br>
                                    @if ($page->image != null)
                                    <img src="{{ asset('public/assets/images/pages/'.$page->image) }}" alt="Image" class="img width-100" />
                                    @else
                                    <span class="border p-2">
                                        Sin imagen
                                    </span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="banner_image">Imagen</label>
                                    <br>
                                    @if ($page->banner_image != null)
                                    <img src="{{ asset('public/assets/images/pages/'.$page->banner_image) }}" alt="Image" class="img img-display-list" />
                                    @else
                                    <span class="border p-2">
                                        Sin imagen
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Descripción</label>
                                    <div>
                                        {!! $page->description !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="meta_description">Descripción Interna</label>
                                    <div>
                                        {!! $page->meta_description !!}
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="card-body">
                                        @if (Auth::user()->can('page.edit'))
                                            <a  class="btn btn-success" href="{{ route('admin.pages.edit', $page->id) }}"> <i class="fa fa-edit"></i> Editar</a>
                                        @endif
                                        <a href="{{ route('admin.pages.index') }}" class="btn btn-dark ml-2">Cancelar</a>
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
