@extends('layouts.app')
@section('content')


<form role="form" method="post" action="{{url('/productos')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
<label for="Producto">{{'Producto'}}</label>
<input class="form-control" type="text" name="Producto" id="Producto">
    </div>
    <div class="form-group">
<label for="Descripcion">{{'Descripcion'}}</label>
<input class="form-control" type="text" name="Descripcion" id="Descripcion">
    </div>
    <div class="form-group">
<label for="precio">{{'precio'}}</label>
<input class="form-control" type="text" name="precio" id="precio">
    </div>
    <div class="form-group">
<label for="imagen">{{'imagen'}}</label>
<input class="form-control" type="file" name="imagen" id="imagen">
    </div>
<input type="submit" value="Agregar"class="btn btn-success" >
</form>
@endsection
