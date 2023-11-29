{{-- @extends('layout')
@section('content')
<x-card>
    <div class="container mt-3">
        <h2>Post job from IT filds</h2>
<form>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
 
  </form>
    </div>
</x-card>
@endsection --}}

@extends('layouts.app')
@section('content')
    <x-card>
        <div class="container mt-3">
            <h2 class="text-light">{{__('Post job from IT filds')}}</h2>
            <form method="POST" action="/listings" enctype="multipart/form-data">
                @csrf

                <div class="form-group text-light">
                    <label for="company">{{__('Company name')}}</label>
                    <input type="text" class="form-control" name="company" placeholder="{{__('Enter company name')}}" value="{{old('company')}}">
                    @error('company')
                        <p class="text-danger font-italic">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group text-light">
                    <label for="title">{{__('Job title')}}</label>
                    <input type="text" class="form-control" name="title" placeholder="{{__('Enter job title')}}" value="{{old('title')}}">
                    @error('title')
                    <p class="text-danger font-italic">{{$message}}</p>
                @enderror

                </div>

                <div class="form-group text-light">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control" name="tags"
                        placeholder="{{__('Enter comma separated tags exp. laravel, php, js')}}" value="{{old('tags')}}">
                        @error('tags')
                        <p class="text-danger font-italic">{{$message}}</p>
                    @enderror
    
                </div>

                <div class="form-group text-light">
                    <label for="location">{{__('Location')}}</label>
                    <input type="text" class="form-control" name="location" placeholder="{{__('exm. Remote, Belgrade, etc')}}" value="{{old('location')}}">
                    @error('location')
                    <p class="text-danger font-italic">{{$message}}</p>
                @enderror
                </div>

                <div class="form-group text-light">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" name="website" placeholder="" value="{{old('website')}}">
                    @error('website')
                    <p class="text-danger font-italic">{{$message}}</p>
                @enderror
                </div>

                <div class="form-group text-light">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email"
                        placeholder="{{__('Enter email exp. example@example.com')}}" value="{{old('email')}}">
                        @error('email')
                        <p class="text-danger font-italic">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group text-light">
                    <label for="logo">{{__('Company Logo')}}</label>
                    <input type="file" class="form-control" name="logo">
                        @error('logo')
                        <p class="text-danger font-italic">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group text-light">
                    <label for="description">{{__('Job description')}}</label>
                    <textarea class="form-control" name="description" rows="10"
                    placeholder=""> {{old('description')}}</textarea>
                    @error('description')
                    <p class="text-danger font-italic">{{$message}}</p>
                @enderror
                </div><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{__('Create')}}</button>
                    <a href="/" class="btn btn-primary btn-lg btn-block"> {{__('Back')}} </a>
                </div>
               


            </form>
        </div>
    </x-card>
@endsection
