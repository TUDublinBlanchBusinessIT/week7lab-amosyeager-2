<!-- Orderdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orderdate', 'Orderdate:') !!}
    {!! Form::text('orderdate', null, ['class' => 'form-control','id'=>'orderdate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#orderdate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Deliverystreet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deliverystreet', 'Deliverystreet:') !!}
    {!! Form::text('deliverystreet', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Deliverycity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deliverycity', 'Deliverycity:') !!}
    {!! Form::text('deliverycity', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Deliverycounty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deliverycounty', 'Deliverycounty:') !!}
    {!! Form::text('deliverycounty', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Ordertotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ordertotal', 'Ordertotal:') !!}
    {!! Form::number('ordertotal', null, ['class' => 'form-control']) !!}
</div>