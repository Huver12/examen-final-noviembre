<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $eventoCorporativo?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $eventoCorporativo?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $eventoCorporativo?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
    <label for="tipo_id" class="form-label">{{ __('Tipo Id') }}</label>
    <select name="tipo_id" class="form-control @error('tipo_id') is-invalid @enderror" id="tipo_id">
        <option value="">{{ __('Seleccione un tipo') }}</option>
        @foreach (App\Models\EventoCorporativoTipo::all() as $tipo)
            <option value="{{ $tipo->id }}" {{ old('tipo_id', $eventoCorporativo?->tipo_id) == $tipo->id ? 'selected' : '' }}>
                {{ $tipo->nombre }}
            </option>
        @endforeach
    </select>
    {!! $errors->first('tipo_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>


        <div class="form-group mb-2 mb20">
            <label for="tipo_evento_id" class="form-label">{{ __('Tipo Evento Id') }}</label>
            <input type="text" name="tipo_evento_id" class="form-control @error('tipo_evento_id') is-invalid @enderror" value="{{ old('tipo_evento_id', $eventoCorporativo?->tipo_evento_id) }}" id="tipo_evento_id" placeholder="Tipo Evento Id">
            {!! $errors->first('tipo_evento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>