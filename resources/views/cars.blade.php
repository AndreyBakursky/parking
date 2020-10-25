@extends('layouts.app')

@section('title-block')
  Все автомобили
@endsection

@section('content')
  <h1>Список автомобилей</h1>
  @foreach($data as $el)
    <div class="alert alert-info">
      <h3>{{ $el->name }}</h3>
      <p>{{ $el->car }}</p>
      <p>{{ $el->carmodel }}</p>
      <p><small>{{ $el->carnumber }}</small></p>
      <a href="{{ route('ShowCar', $el->id) }}"><button class="btn btn-warning">Подробнее</button></a>
    </div>
  @endforeach
@endsection
