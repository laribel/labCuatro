@extends('layouts.unico')
@section('content') 
<h2 class="display-6 text-center mb-4">Tareas</h2>

<a href="/tasks/create" class="btn btn-outline-primary">Nueva Tarea</a>
<div class="table-responsive">
    <table class="table text-left">
        <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 22%;">Nombre</th>
                <th style="width: 22%;">Completada</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($tasks as $task)
            <tr>
                <th scope="row" class="text-start">{{ $task->id }}</th>
                
                <td>
                <a href="/tasks/{{ $task->id }}">{{ $task->name }}</a>
                </td>
    
                <td>
                <span {{ $task->completed ? 'success' : 'warning' }}">{{ $task->completed ? 'Completada' : 'Pendiente' }}</span>

                </td>
                <td>
                    <a href="\tasks\completed.php" class="btn btn-primary">Completar</a>
                </td>
            </tr>
            
            @endforeach
           
        </tbody>


    </table>
</div>

@endsection