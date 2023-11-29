
@extends('layouts.app')
@section('content')
    <x-card>
        <div class="container mt-3">
            <h2 class="text-light">{{__('Edit job')}}</h2>
            <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group text-light">
                    <label for="company">{{__('Company name')}}</label>
                    <input type="text" class="form-control" name="company" placeholder="{{__('Enter company name')}}" value="{{$listing->company}}">
                    @error('company')
                        <p class="text-danger font-italic">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group text-light">
                    <label for="title">{{__('Job title')}}</label>
                    <input type="text" class="form-control" name="title" placeholder="{{__('Enter job title')}}" value="{{$listing->title}}">
                    @error('title')
                    <p class="text-danger font-italic">{{$message}}</p>
                @enderror

                </div>

                <div class="form-group text-light">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control" name="tags"
                        placeholder="{{__('Enter comma separated tags exp. laravel, php, js')}}" value="{{$listing->tags}}">
                        @error('tags')
                        <p class="text-danger font-italic">{{$message}}</p>
                    @enderror
    
                </div>

                <div class="form-group text-light">
                    <label for="location">{{__('Location')}}</label>
                    <input type="text" class="form-control" name="location" placeholder="{{__('exm. Remote, Belgrade, etc')}}" value="{{$listing->location}}">
                    @error('location')
                    <p class="text-danger font-italic">{{$message}}</p>
                @enderror
                </div>

                <div class="form-group text-light">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" name="website" placeholder="" value="{{$listing->website}}">
                    @error('website')
                    <p class="text-danger font-italic">{{$message}}</p>
                @enderror
                </div>

                <div class="form-group text-light">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email"
                        placeholder="Enter email exp. example@example.com" value="{{$listing->email}}">
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

                    <img src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('images/no-logo.jpg')}}" class="mb-2" style="width: 100px;" alt="...">
                </div>

                <div class="form-group text-light">
                    <label for="description">{{__('Job description')}}</label>
                    <textarea class="form-control" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc"> {{$listing->description}}</textarea>
                    @error('description')
                    <p class="text-danger font-italic">{{$message}}</p>
                @enderror
                </div><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{__('Edit')}}</button>
                    <a href="/" class="btn btn-primary btn-lg btn-block">{{__('Back')}}  </a>
                </div>
               


            </form>
        </div>
    </x-card>
@endsection
