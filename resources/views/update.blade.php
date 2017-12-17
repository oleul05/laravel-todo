@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{route('todos.update',['id'=>$todo->id])}}" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control" name="todo" value="{{$todo->todo}}" placeholder="Create a new todo">
                
            </form>
        </div>
    </div> 

@stop