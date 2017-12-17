@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="/create/todo" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control" name="todo" placeholder="Create a new todo">
                
            </form>
        </div>
    </div> 
    @foreach($todos as $todo)
        {{$todo->todo}} <a href="{{route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger"> x </a>
        <a href="{{route('todo.update', ['id' => $todo->id]) }}" class="btn btn-primary"> Update </a>
        @if(!$todo->completed)
            <a href="{{route('todo.completed', ['id' => $todo->id]) }}" class="btn btn-success">Mark as complete</a>

        @else 
        <span class="success">Completed</span>
        @endif
        <br/>
    @endforeach 

@stop