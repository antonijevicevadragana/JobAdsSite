@extends('layouts.app')

@section('content')
@include('partials._hero') 
@include('partials._search') 

<x-card>

   @foreach ($listings as $listing)


  <x-listing-card :listing="$listing"/>  


  @endforeach
 
</x-card>

<div class=" border-2 m-4 rounded-lg">
  {{$listings->links()}}
</div>
@endsection