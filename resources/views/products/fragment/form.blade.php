<div class="form-froup">
    
    {!! Form::label('name', 'Nombre del Producto') !!}
    
    {!! Form::text('name', null, ['class'=>'form-control']) !!}    
    
</div>

<div class="form-froup">
    
    {!! Form::label('short', 'Descripción Breve del Producto') !!}
    
    {!! Form::text('short', null, ['class'=>'form-control']) !!}    
    
</div>

<div class="form-froup">
    
    {!! Form::label('body', 'Descripción del Producto') !!}
    
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}    
    
</div>

<div class="form-froup">
    
    {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary']) !!}
    
    
    
</div>