@extends('backend.layouts.master')

@section('title')
    @include('backend.pages.admins.partials.title')
@endsection

@section('admin-content')
    @include('backend.pages.admins.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
            <form action="{{ route('admin.admins.store') }}" method="POST" data-parsley-validate
                data-parsley-focus="first" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="first_name">Nombre <span
                                            class="required">*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        value="{{ old('first_name') }}" placeholder="Nombre" required="" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="last_name">Apellido <span
                                            class="required">*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ old('last_name') }}" placeholder="Apellido" required="" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="designation">Cargo <span
                                            class="optional">(opcional)</span></label>
                                    <input type="text" class="form-control" id="designation" name="designation"
                                        value="{{ old('designation') }}" placeholder="Cargo" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="phone_no">Teléfono <span
                                            class="required">*</span></label>
                                    <input type="text" class="form-control" id="phone_no" name="phone_no"
                                        value="{{ old('phone_no') }}" placeholder="Teléfono" required="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">Correo Electrónico <span
                                            class="required">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="Correo Electrónico" required="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="username">Username <span
                                            class="optional">(opcional)</span></label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ old('username') }}"
                                        placeholder="Username (Dejar en blanco para generar automáticamente)"
                                        data-parsley-type="alphanum" />
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group has-success">
                                    <label class="control-label" for="status">Estado <span
                                            class="required">*</span></label>
                                    <select class="form-control custom-select" id="status" name="status" required>
                                        <option value="1" {{ old('status') == '1' ? 'selected' : null }}>Activo</option>
                                        <option value="0" {{ old('status') == '0' ? 'selected' : null }}>Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group has-success">
                                    <label class="control-label" for="visible_in_team">Visible en Equipo <span
                                            class="required">*</span></label>
                                    <select class="form-control custom-select" id="visible_in_team" name="visible_in_team"
                                        required>
                                        <option value="1" {{ old('visible_in_team') == '1' ? 'selected' : null }}>Visible
                                        </option>
                                        <option value="0" {{ old('visible_in_team') == '0' ? 'selected' : null }}>
                                            Invisible</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="password">Contraseña <span
                                            class="required">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="{{ old('password') }}" placeholder="Contraseña" required=""
                                        data-parsley-equalto="#password_confirmation" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="password_confirmation">Confirmar Contraseña <span
                                            class="required">*</span></label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" value="{{ old('password') }}"
                                        placeholder="Confirmar Contraseña" required="" data-parsley-equalto="#password" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="roles">Asignar Roles <span
                                            class="optional">(opcional)</span></label>
                                    <br>
                                    <select class="roles_select form-control custom-select " id="roles" name="roles[]"
                                        multiple style="width: 100%;">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="languages">Idioma <span
                                            class="optional">(opcional)</span></label>
                                    <br>
                                    <select class="roles_select form-control custom-select " id="languages"
                                        name="language_id" style="width: 100%;">
                                        @foreach ($languages as $language)
                                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="avatar">Avatar <span class="optional">(opcional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="avatar" name="avatar" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="control-label">Redes Sociales <span class="optional">(opcional)</span></label>

                                <div class="row">
                                    @foreach ($social_links as $social => $socialName)
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{ $socialName }}
                                                <input type="url" name="social_links[{{ $social }}]" class="form-control"/>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Guardar</button>
                            <a href="{{ route('admin.admins.index') }}" class="btn btn-dark">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(".roles_select").select2({
            placeholder: "Seleccione los roles a asignar."
        });
    </script>
@endsection
