@extends('layouts.app')
@section('content')


<form role="form" method="post" action="{{url('/productos/'.$datos->id)}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
<label for="Producto">{{'Producto'}}</label>
<input class="form-control" type="text" name="Producto" value="{{$datos->Producto}}" id="Producto">
    </div>
    <div class="form-group">
<label for="Descripcion">{{'Descripcion'}}</label>
<input class="form-control" type="text" name="Descripcion" value="{{$datos->Descripcion}}" id="Descripcion">
    </div>
    <div class="form-group">
<label for="precio">{{'precio'}}</label>
<input class="form-control" type="text" name="precio" value="{{$datos->precio}}" id="precio">
    </div>
    <div class="form-group">
<label for="imagen">{{'imagen'}}</label>
<img class="img-fluid" src="{{ asset('storage').'/'.$datos->imagen}}" alt="foto">
<input class="form-control" type="file" name="imagen" value="{{$datos->imagen}}" id="imagen">
    </div>
<input type="submit" value="editar" class="btn btn-success">
</form>
@endsection
