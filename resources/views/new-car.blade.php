@extends('layout.cars-layout')


@section ('content')


  <form class="post " action="{{ route('cars.store')}}" method="post">
    @csrf
    <div class=" ">
    <label for="brand">Brand</label>
    <input type="text" name="brand" value="">
    </div>
    <div class="">
    <label for="model">Model</label>
    <input type="text" name="model" value="">
    </div>
    <div>
    <label for="displace">Displacement</label>
    <input type="text" name="displace" value="">
    </div>
    <div>
    <label for="max-speed">Max speed</label>
    <input type="text" name="max-speed" value="">
    </div>

    <button type="submit" name="button">Create New Car</button>

  </form>





@stop
