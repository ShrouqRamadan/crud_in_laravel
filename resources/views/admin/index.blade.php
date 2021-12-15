@extends("layouts.app")
@section('contact')
@if(Session::has('done'))
<div class="alert alert-primary" role="alert">
 {{Session::get('done')}}
</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">salay</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($admin as $data )
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->salary}}</td>
      <td>
          <form action="{{route('admin.destroy',$data->id)}}" method="POST">
              @csrf
              <input type="hidden" value="DELETE" name="_method">
              <input type="submit" value="DELETE" class="btn btn-danger">

          </form>
      </td>
      <td><a href="{{route('admin.edit',$data->id)}}" class="btn btn-info">edit</a></td>
    </tr>
    @endforeach
   
  </tbody>
</table>



@endsection;