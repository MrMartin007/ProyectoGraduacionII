<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_cargo') }}
            {{ Form::text('nombre_cargo', $cargo->nombre_cargo, ['class' => 'form-control' . ($errors->has('nombre_cargo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cargo']) }}
            {!! $errors->first('nombre_cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>