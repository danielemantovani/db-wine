@extends('layouts.app')

@section('content')
    <section>
        <div class="container text-center">

            {{-- Title  --}}
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="py-5">Wines List</h1>
                <a href="{{ route('wines.create') }}" class="btn btn-secondary">Aggiungi</a>
            </div>

            {{-- Deleted Message --}}
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            {{-- Wines Cards --}}
            <div class="row g-3">
                @foreach ($winesObj as $wine)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <picture>
                                <img src="{{ $wine->image }}" class="img-fluid" alt="{{ $wine->wine }}">
                            </picture>
                            <div class="card-body">

                                <h5 class="card-title">Wine: {{ $wine->wine }}</h5>

                                <a href="{{ route('wines.show', ['wine' => $wine->id]) }}" class="btn btn-primary">Wine
                                    Details</a>

                                <a href="{{ route('wines.edit', ['wine' => $wine->id]) }}" class="btn btn-warning">Wine
                                    Modify</a>
                                
                            </div>

                            {{-- Delete element --}}
                            <form action="{{ route('wines.destroy', ['wine' => $wine->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" id="cancel-btn">Delete</button>
                            </form>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
