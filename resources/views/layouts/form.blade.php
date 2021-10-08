@extends('main')

@section('content')

<section class="container my-5">
    <form class="container text-dark d-flex flex-column w-75 my-5" action="{{route('mail')}}" method="post">
        @csrf
        <label class="my-3 fw-bold" for="name">Nom complet: </label>
        <input type="text" name="name" id="name" value="{{old('name')}}">

        <label class="my-3 fw-bold" for="email">Adresse mail : </label>
        <input type="text" name="email" id="" value="{{old('email')}}">

        <label class="my-3 fw-bold" for="message">Message : </label>
        <textarea name="message" id="" cols="30" rows="4">{{old('message')}}</textarea>

        <button class="btn btn-success mt-3 w-25" type="submit">Envoyer</button>
        
    </form>
</section>

@endsection
