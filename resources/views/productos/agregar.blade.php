@extends('layouts.app')
@section('content')

<form role="form" method="post" action="{{url('/productos')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-row">
    <label for="inputAddress">{{'Producto'}}</label>
<input class="form-control"  type="text" name="Producto" id="Producto">
    </div>

    <div class="form-row">
<label for="inputAddress">{{'Descripcion'}}</label>
<input class="form-control"  type="text" name="Descripcion" id="Descripcion">
    </div>

    <div class="form-row">
<label for="inputAddress">{{'precio'}}</label>
<input class="form-control"  type="text" name="precio" id="precio">

    </div>
<div class="form-row">
<label for="inputAddress">{{'imagen'}}</label>
<input class="form-control"  type="file" name="imagen" id="imagen">

`   </div>
<input type="submit" value="Agregar">
</form>

</table>
@endsection
