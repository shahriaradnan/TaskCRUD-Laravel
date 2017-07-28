@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{action('TaskController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Task Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="{{$task->name}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
      <div class="col-sm-10">
        <textarea name="description" rows="8" cols="80">{{$task->description}}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection