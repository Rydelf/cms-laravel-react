<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">
                @if (Route::is('admin.booking_request.index'))
                    Solicitud de Agendamiento
                @elseif(Route::is('admin.booking_request.edit'))
                    Administrar Solicitud <span class="badge badge-info">{{ $booking_request->name }}</span>
                @endif
            </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Inicio</a></li>
                        @if (Route::is('admin.booking_request.index'))
                            <li class="breadcrumb-item active" aria-current="page">Solicitud de Agendamiento</li>
                        @elseif(Route::is('admin.booking_request.edit'))
                        <li class="breadcrumb-item"><a href="{{ route('admin.booking_request.index') }}">Solicitud de Agendamiento</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Solicitud</li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
