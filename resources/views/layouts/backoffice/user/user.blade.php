@extends('mainBack')

@section('content')

@foreach ($user as $data)
    <p>{{$data->name}}</p>
@endforeach

@endsection