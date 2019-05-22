@extends('layout.cars-layout')

@section('content')

<table class=" table table-striped">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">BRAND</th>
        <th scope="col"> MODEL</th>
        <th scope="col">DISPLACE</th>
        <th scope="col">MAX SPEED</th>
        <th scope="col"></th>

    </tr>
  </thead>
  <tbody>

    @yield('rows')
  </tbody>
</table>


@stop
