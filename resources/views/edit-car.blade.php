@extends('layout.cars-layout')


@section ('content')


  <form class="post" action="{{ route('cars.update',$car->id)}}" method="post">
    @csrf
    @method('PATCH')
    <div class=" ">
    <label for="brand">Brand</label>
    <input type="text" name="brand" value="{{$car->brand}}">
    </div>
    <div class="">
    <label for="model">Model</label>
    <input type="text" name="model" value="{{$car->model}}">
    </div>
    <div>
    <label for="displace">Displacement</label>
    <input type="text" name="displace" value="{{$car->displace}}">
    </div>
    <div>
    <label for="max-speed">Max speed</label>
    <input type="text" name="max-speed" value="{{ $car->{'max-speed'} }}">
    </div>

    <button type="submit" name="button">Edit Car</button>

  </form>





@stop
