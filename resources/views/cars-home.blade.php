@extends('layout.table')


@section ('rows')

@foreach ($cars as $car)

  <tr>
      <th scope="row">{{$car -> id}}</th>
      <td>{{$car -> brand}}</td>
      <td>{{$car -> model}}</td>
      <td>{{$car -> displace}}</td>
      <td>{{ $car->{'max-speed'} }}</td>
      <td class=" edit d-flex justify-content-around" >

        <a href="{{route('cars.edit',$car->id)}}"><i class="far fa-edit"></i></a>

        <form  action="{{ route('cars.destroy',$car->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" name="button"><a href=""><i class="far fa-trash-alt" type="submit"></i></a></button>
        </form>
      </td>
  </tr>

@endforeach

@stop

@section ('options')

<div class="newCar d-flex justify-content-center p-3">
  <a  class="d-inline py-2 px-3 rounded" href="{{route('cars.create')}}">Create new car</a>
</div>

@stop
