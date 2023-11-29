@extends('layouts.app')
@section('content')
    <x-card>
        <table class="table">
            <thead>

                @if ($listings->isEmpty())
                    <tr>
                        <td>{{__('No item')}}</td>
                    </tr>
                @else
                    @foreach ($listings as $listing)
                        <tr>
                            <td> <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
                            </td>
                            <td>
                                <div class="row mb-0 float-start">
                                    <a href="/listings/{{ $listing->id }}/edit" class="btn btn-primary">
                                        <i class="fa-solid fa-pencil"></i>
                                        {{__('Edit')}}
                                    </a>
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="row mb-0 float-end">
                                    <form method="POST" action="/listings/{{ $listing->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                            {{__('Delete')}}

                                        </button>

                                    </form>

                            </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
        </table>

    </x-card>
@endsection
