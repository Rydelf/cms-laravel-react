@extends('backend.layouts.master')

@section('title')
    @include('booking::backend.booking_request.partials.title')
@endsection

@section('admin-content')
    @include('booking::backend.booking_request.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page p-4">
            <form action="{{ route('admin.booking_request.update', $booking_request->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h3>Agendar Solicitud de Información</h3>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>#{{ $booking_request->id }}</td>
                                </tr>
                                <tr>
                                    <th>Información de Cliente</th>
                                    <td>
                                        Nombre: {{ $booking_request->name }}<br>
                                        Correo: <a
                                            href="mailto:{{ $booking_request->email }}">{{ $booking_request->email }}</a><br>
                                        Teléfono: <a
                                            href="tel:{{ $booking_request->phone_no }}">{{ $booking_request->phone_no }}</a><br>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Información de Servicio</th>
                                    <td>
                                        <b>Categoría:</b> {{ $booking_request->service_category_name }}<br>
                                        <b>Servicio:</b> {{ $booking_request->service_name }}<br>
                                        <b>Evaluación:</b> {{ $booking_request->booking_rate_name }}<br>
                                        <b>Valor de Evaluación:</b> {{ $booking_request->booking_rate_value }}$<br>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Información de Cita</th>
                                    <td>
                                        <b>Tiempo de Servicio: </b> {{ $booking_request->start_date }} at
                                        {{ $booking_request->start_time }}<br />
                                        <b>Fecha de Solicitud: </b> {{ $booking_request->created_at->diffForHumans() }}<br />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Mensaje Adicional</th>
                                    <td>
                                        {{ empty($booking_request->message) ? 'N/A' : $booking_request->message }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Estado</th>
                                    <td>
                                        <select name="booking_status" id="booking_status" class="form-control" required>
                                            @foreach ($booking_statuses as $key => $status)
                                                <option value="{{ $key }}"
                                                    {{ $booking_request->status == $key ? 'seleccionado' : '' }}>
                                                    {{ $status }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h3>Información de Facturación</h3>
                        @if (!empty($billing))
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Información de Cliente</th>
                                        <td>
                                            Nombre: {{ $billing->first_name }} {{ $billing->last_name }}<br>
                                            Correo: <a
                                                href="mailto:{{ $billing->email }}">{{ $billing->email }}</a><br>
                                            Teléfono: <a
                                                href="tel:{{ $billing->phone_no }}">{{ $billing->phone_no }}</a><br>
                                            Nombre Empresa: {{ $billing->company_name }}<br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Información de Dirección</th>
                                        <td>
                                            <b>Región:</b> {{ $billing->state }}<br>
                                            <b>Ciudad:</b> {{ $billing->city }}<br>
                                            <b>Dirección:</b> {{ $billing->address }}<br>
                                            <b>Código Postal:</b> {{ $billing->post_code }}<br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Mensaje Adicional</th>
                                        <td>
                                            {{ empty($billing->billing_message) ? 'N/A' : $billing->billing_message }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Información de Servicio</th>
                                        <td>
                                            <table>
                                                <tbody class="table table-borderless table-sm">
                                                    <tr>
                                                        <th>Hora Agendada:</th>
                                                        <td>{{ $billing->booking_hour }}Hr</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Precio Unitario:</th>
                                                        <td>{{ $booking_request->booking_rate_value }}$ </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Subtotal: (+)</th>
                                                        <td>{{ $billing->booking_hour * $booking_request->booking_rate_value }}$
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>IVA: (+)</th>
                                                        <td>{{ $billing->booking_gst }}$ </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total: (+)</th>
                                                        <td>{{ $billing->grand_total }}$ </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Estado</th>
                                        <td>
                                            <select name="billing_status" id="billing_status" class="form-control"
                                                required>
                                                @foreach ($billing_statuses as $key => $status)
                                                    <option value="{{ $key }}"
                                                        {{ $billing->payment_status == $key ? 'seleccionado' : '' }}>
                                                        {{ $status }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
                <div class="form-actions">
                    <div class="card-body">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Actualizar</button>
                        <a href="{{ route('admin.booking_request.index') }}" class="btn btn-dark">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    @include('booking::backend.booking_request.partials.scripts')
@endsection
