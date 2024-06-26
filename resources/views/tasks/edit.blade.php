@extends('layouts.unico')

@section('content') 
<div>
<h1>Editando tarea ID: {{ $task->id }}</h1>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name">Nombre</label>
        <input type="text" class="form-control"name="name" id="name" value="{{ $task->name }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description">Descripción</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $task->description }}</textarea>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <button type="submit">Actualizar</button>
    
</form>
</div>
@endsection