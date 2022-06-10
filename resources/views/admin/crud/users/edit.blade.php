@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')

@stop

@section('content')
<div class="p-4">
    <div class="card card-primary m-2">
        <div class="card-header m-4">
            <h3 class="card-title">Editar usuario</h3>
        </div>
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('put')

            @include('admin.crud.users._form')

            <div class="card-footer">
                <button type="submit" class="btn btn-secondary">Actualizar usuario</button>
            </div>
        </form>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop
