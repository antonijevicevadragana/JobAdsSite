@extends('layouts.app')
@section('content')
    @include('partials._search')


    <x-card>
        <div class="container mt-3">
            <div class="card mt-3 text-center">
                <div class="align-items-center">
                    <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-logo.jpg') }}"
                        class="mb-2" style="width: 100px;" alt="...">
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $listing->title }}</h4>
                    <h5 class="card-text">{{ $listing->company }}</h5>
                    <x-listing-tags :tagsdb="$listing->tags" />
                    <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{ $listing->location }}</p>
                    <hr>
                    <h5 class="card-text">{{__('Job description')}}</h5>
                    <p class="card-text">{{ $listing->description }}</p>

                    <div class="container mt-3">
                        <div class="d-grid gap-3">
                            <a href="{{ $listing->website }}" target="_blank" class="btn btn-secondary btn-lg btn-block">
                                <i class="fa-solid fa-globe"></i>
                                {{__('Visit website')}}</a>
                            <a href="mailto:{{ $listing->email }}" target="_blank"
                                class="btn btn-secondary btn-lg btn-block"><i class="fa-solid fa-envelope"></i>
                                {{__('Contact Employer')}}</a>
                        </div>
                    </div>

                    <br>
                    {{-- <div class="container mt-3">
                        @auth
                            
                       
                        <div class="row mb-0 float-start">
                            <a href="/listings/{{ $listing->id }}/edit" class="btn btn-primary">
                                <i class="fa-solid fa-pencil"></i>
                                Edit Job
                            </a>
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row mb-0 float-end">
                            <form method="POST" action="/listings/{{ $listing->id }}">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                    Delete Job

                                </button>

                            </form>
                            @endauth --}}
                        </div>
                    </div>
                </div>

            </div>

    </x-card>
@endsection
