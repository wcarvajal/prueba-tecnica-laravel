@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ABM de Provincias</h2>

    <form id="provinceForm">
        <div class="form-group">
            <label for="province">Provincia:</label>
            <select class="form-control" id="province" name="province">
                <option value="null" selected disabled hidden>Elegir una provincia</option>
                <@foreach($arrayProvinces as $key => $arrayProvince)
                    <option value="{{$arrayProvince['id']}}">{{$arrayProvince['desc']}}</option>
                @endforeach
            </select>
        </div>
        <div class="btn-panel mt-15">
            <button type="button" id="addProvinceBtn" class="btn btn-primary" >Agregar</button>
            <button type="button" id="editProvinceBtn" class="btn btn-primary hidden" >Editar</button> 
            <button type="button" id="deleteProvinceBtn" class="btn btn-warning hidden" >Eliminar</button>
            <button type="button" id="cancelProvinceBtn" class="btn btn-danger hidden" >Cancelar</button>
        </div>
    </form>

    <form id="saveProvinceForm" class="hidden">
        <div class="form-group">
            <input class="form-control hidden" id="saveProvinceInput" data-action="" value="" placeholder="Ingresar la nueva provincia"></input>
        </div>
        <div class="btn-panel mt-15">
            <button type="button" id="saveProvince" data-api="" class="btn btn-primary" >Guardar</button> 
            <button type="button" id="cancelProvince" class="btn btn-danger" >Cancelar</button> 
        </div>
    </form>

</div>

@endsection
