@extends('layouts.app')

@section('title-block')
  Новый автомобиль
@endsection

@section('content')
  <h3> Укажите данные владельца</h3>
  <p></p>

  <form action="{{ route('create-form') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="name">ФИО</label>
      <input type="text" name="name" placeholder="Заполнить данные" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="gender">Пол</label>
      <select name="gender" class="custom-select d-block w-500" id="gender" required="">
        <option value="">Выбрать...</option>
        <option value="Мужской">Мужской</option>
        <option value="Женский">Женский</option>
      </select>
    </div>

    <div class="form-group">
      <label for="phonenumber">Телефон</label>
      <input type="text" name="phonenumber" placeholder="Заполнить данные" id="phonenumber" class="form-control" required="">
    </div>

    <div class="form-group">
      <label for="address">Адрес</label>
      <input type="text" name="address" placeholder="Заполнить данные" id="address" class="form-control">
    </div>

    <div class="form-group">
      <label for="car">Автомобиль</label>
      <input type="text" name="car" placeholder="Заполнить данные" id="car" class="form-control" required="">
    </div>

    <h3>Заполните данные автомобиля</h3>

    <div class="form-group">
      <label for="carbrand">Марка автомобиля</label>
      <input type="text" name="carbrand" placeholder="Заполнить данные" id="carbrand" class="form-control" required="">
    </div>

    <div class="form-group">
      <label for="carmodel">Модель автомобиля</label>
      <input type="text" name="carmodel" placeholder="Заполнить данные" id="carmodel" class="form-control" required="">
    </div>

    <div class="form-group">
      <label for="carcolor">Цвет кузова</label>
      <input type="text" name="carcolor" placeholder="Заполнить данные" id="carcolor" class="form-control" required="">
    </div>

    <div class="form-group">
      <label for="carnumber">Гос. номер РФ</label>
      <input type="text" name="carnumber" placeholder="Заполнить данные" id="carnumber" class="form-control" required="">
    </div>

    <p>На текущий момент автомобиль на стоянке?</p>
    <div class="form-group">
        <input type="checkbox" name="carinparking" value="carinparking">Да
    </div>
      <div>
          <input type="checkbox" name="carismissing" value="carismissing">Нет
      </div>

    <button type="submit" class="btn btn-success">Отправить</button>
  </form>


@endsection
