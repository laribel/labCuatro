@extends('layouts.unico')
@section('content') 


<div class="row">
    <h1 >Tarea ID: {{ $task->id }}</h1>
    <a href="/tasks/{{ $task->id }}/edit">Editar</a>

  <div class="col">
  <h2 class="form-control">{{ $task->name }}</h2>
  </div>
  <div class="col" >
  <p class="form-control">{{ $task->description }}</p>
  </div>

  <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $task->id }}').submit();">Eliminar</a>
</div>




<form id="delete-form-{{ $task->id }}" action="{{ url('/tasks/' . $task->id . '/delete') }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
  
    
</form>


@endsection