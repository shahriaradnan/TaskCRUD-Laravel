<!-- create.blade.php -->
@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{action('TaskController@store')}}">
    <div class="form-group row">
          {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Task Name</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
      <div class="col-sm-6">
        <textarea name="description" rows="5" cols="75" required=""></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-2"></div>
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </form>
</div>
@endsection