<!-- Productid Field -->
<div class="col-sm-12">
    {!! Form::label('productid', 'Productid:') !!}
    <p>{{ $orderdetail->productid }}</p>
</div>

<!-- Orderid Field -->
<div class="col-sm-12">
    {!! Form::label('orderid', 'Orderid:') !!}
    <p>{{ $orderdetail->orderid }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $orderdetail->quantity }}</p>
</div>

<!-- Subtotal Field -->
<div class="col-sm-12">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    <p>{{ $orderdetail->subtotal }}</p>
</div>

