@extends('layout.table')


@section ('rows')

@foreach ($cars as $car)
  <div class="row">
    <div class="id">
      {{$car -> id}}
    </div>
    <div class="col">
      {{$car -> brand}}

    </div>
    <div class="col">
      {{$car -> model}}

    </div>
    <div class="col">
      {{$car -> displace}}

    </div>
    <div class="col">

      {{ $car->{'max-speed'} }}
    </div>
    <div class="icons">

      <a href="#"><i class="far fa-edit"></i></a>
      <a href="#"><i class="far fa-trash-alt"></i></a>
    </div>

  </div>



@endforeach

@stop

@section ('options')
<div class="newCar">
  <a href="{{route('cars.create')}}">Create new car</a>
</div>

@stop
