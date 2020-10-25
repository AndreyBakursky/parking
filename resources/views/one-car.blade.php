@extends('layouts.app')

@section('title-block'){{$data->name}}@endsection

@section('content')
  <h1>{{$data->name}}</h1>
    <div class="alert alert-info">
      <p>{{ $data->car }}</p>
      <p>{{ $data->carmodel }}</p>
      <p>{{ $data->carcolor }}</p>
      <p><small>{{ $data->phonenumber }}</small></p>
      <p><small>{{ $data->carnumber }}</small></p>
        <a href="{{ route('change', $data->id) }}"><button class="btn btn-warning">Редактировать</button></a>
            <a href="{{ route('cardelete', $data->id) }}"><button class="btn btn-warning">Удалить</button></a>
    </div>
@endsection
