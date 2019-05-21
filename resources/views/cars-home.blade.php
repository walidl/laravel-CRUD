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

      <a href="{{route('cars.edit',$car->id)}}"><i class="far fa-edit"></i></a>

        <form  action="{{ route('cars.destroy',$car->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" name="button"><i class="far fa-trash-alt" type="submit"></i></button>
        </form>

    </div>

  </div>



@endforeach

@stop

@section ('options')
<div class="newCar">
  <a href="{{route('cars.create')}}">Create new car</a>
</div>

@stop
