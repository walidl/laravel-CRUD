@extends('layout.cars-layout')

@section('content')

<div class="table">

  <div class="row title">
    <div class="id">
      ID
    </div>
    <div class="col">
      BRAND
    </div>
    <div class="col">
      MODEL
    </div>
    <div class="col">
      DISPLACEMENT
    </div>
    <div class="col">
      MAX-SPEED
    </div>


  </div>

  @yield('rows')

</div>


@stop
