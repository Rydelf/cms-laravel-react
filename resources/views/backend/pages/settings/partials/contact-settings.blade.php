<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label" for="contact_no">Número de Contacto</label>
            <input type="phone" class="form-control" id="contact_no" name="contact_no" placeholder="Número de Contacto"
                value="{{ $settings->contact->contact_no }}" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label" for="phone">Teléfono</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Teléfono"
                value="{{ $settings->contact->phone }}" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label" for="email_primary">Correo Electrónico Principal</label>
            <input type="email" class="form-control" id="email_primary" name="email_primary" placeholder="Correo Electrónico Principal"
                value="{{ $settings->contact->email_primary }}" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label" for="email_secondary">Correo Electrónico Secundario</label>
            <input type="email" class="form-control" id="email_secondary" name="email_secondary" placeholder="Correo Electrónico Secundario"
                value="{{ $settings->contact->email_secondary }}" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label" for="address">Dirección</label>
            <textarea class="form-control" rows="2" id="address" name="address" placeholder="Dirección">{{ $settings->contact->address }}</textarea>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label" for="working_day_hours">Horas Activo</label>
            <textarea class="form-control" rows="2" id="working_day_hours" name="working_day_hours" placeholder="Horas Activo">{{ $settings->contact->working_day_hours }}</textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label" for="map_lat">Google Map latitude</label>
            <input type="text" class="form-control" id="map_lat" name="map_lat" placeholder="Site google map latitude" value="{{ $settings->contact->map_lat }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label" for="map_long">Google Map longitude</label>
            <input type="text" class="form-control" id="map_long" name="map_long" placeholder="Site google map longitude" value="{{ $settings->contact->map_long }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label" for="map_zoom">Google Map zoom</label>
            <input type="text" class="form-control" id="map_zoom" name="map_zoom" placeholder="Site google map zoom" value="{{ $settings->contact->map_zoom }}">
        </div>
    </div>
</div>
