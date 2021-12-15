@extends('layouts.app')
@section('contact')
<form  action="{{route('admin.update', $admin->id)}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$admin->name}}">
  </div>
  {{method_field("PUT")}}
  <div class="form-group">
    <label for="exampleInputEmail1">salary</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="salary" value="{{$admin->salary}}">
  </div>
  <button class="btn btn-info">save</button>
</form>
@endsection;
