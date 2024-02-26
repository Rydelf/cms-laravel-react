@if (Route::is('admin.booking_request.index'))
Solicitud de Agendamiento
@elseif(Route::is('admin.booking_request.edit'))
Editar Solicitud de Agendamiento - {{ $booking_request->name }}
@elseif(Route::is('admin.booking_request.trashed'))
Solicitud de Agendamiento Eliminadas
@endif
| Admin Panel -
{{ config('app.name') }}
