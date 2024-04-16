
<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Home')



@section('content')

   <x-hero/>
   <x-airportsList :airports="$airports" />
   <x-offers/>
   <x-footer/>
@endsection


