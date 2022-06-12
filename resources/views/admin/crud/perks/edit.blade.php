@extends('adminlte::page')

@section('title', 'Editar perk')

@section('content_header')

@stop

@section('content')
<div class="p-4">
    <div class="card card-primary m-2">
        <div class="card-header m-4">
            <h3 class="card-title">Editar perk</h3>
        </div>
        <form action="{{ route('admin.perks.update', $perk) }}" method="POST">
            @csrf
            @method('put')

            @include('admin.crud.perks._form')

            <div class="card-footer">
                <button type="submit" class="btn btn-secondary">Actualizar Perk</button>
            </div>
        </form>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop
