@extends('layouts.app')
@section('contact')
<form  action="{{route('admin.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">salary</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="salary">
  </div>
  <button class="btn btn-info">save</button>
</form>
@endsection;