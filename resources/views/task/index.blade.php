<!-- index.blade.php -->
@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
      <tr>
        <td>{{$task['id']}}</td>
        <td>{{$task['name']}}</td>
        <td>{{$task['description']}}</td>
        <td><a href="{{action('TaskController@edit', $task['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('TaskController@destroy', $task['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection