<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Models\Create;
use Illuminate\Http\Request;

class CreateController extends Controller {
  public function submit(CreateRequest $req) {
      $create = new Create;
      $create->name = $req->input('name');
      $create->gender = $req->input('gender');
      $create->phonenumber = $req->input('phonenumber');
      $create->address = $req->input('address');
      $create->car = $req->input('car');
      $create->carbrand = $req->input('carbrand');
      $create->carmodel = $req->input('carmodel');
      $create->carcolor = $req->input('carcolor');
      $create->carnumber = $req->input('carnumber');
      $create->carinparking = $req->input('carinparking');
      $create->carismissing = $req->input('carismissing');
      $create->save();

      return redirect()->route('home')->with('success', 'Заявка создана успешно!');
  }

  public function allCars() {
    $object = new Create;
    return view('cars', ['data' => $object->all()]);
  }

  public function ShowCar($id) {
      $object = Create::all();
      return view('one-car', ['data' => $object->find($id)]);
  }

  public function change($id) {
      $object = Create::all();
      return view('change', ['data' => $object->find($id)]);
  }

  public function update($id, Request $req){
      $create = Create::all()->find($id);
      $create->name = $req->input('name');
      $create->gender = $req->input('gender');
      $create->phonenumber = $req->input('phonenumber');
      $create->address = $req->input('address');
      $create->car = $req->input('car');
      $create->carbrand = $req->input('carbrand');
      $create->carmodel = $req->input('carmodel');
      $create->carcolor = $req->input('carcolor');
      $create->carnumber = $req->input('carnumber');
      $create->carinparking = $req->input('carinparking');
      $create->carismissing = $req->input('carismissing');
      $create->save();

      return redirect()->route('ShowCar', $id)->with('success', 'Заявка изменена успешно!');
  }

  public function cardelete($id) {
    Create::destroy($id);
    return redirect()->route('cars')->with('success', 'Заявка удалена успешно!');
  }

}
