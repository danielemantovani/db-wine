@extends('layouts.app')

@section('content')
    <section>
        <h1 class="py-5 text-center">Wine Detail Page</h1>
        <div class="container">
            {{-- Deleted Message --}}
            @include('partials.error')
        </div>

        <div class="container d-flex border border-secondary-subtle">
            <img src=" {{ $wine->image }} " class="img-fluid" alt="{{ $wine->image }}">
            <dl class="px-5">
                <dt class="fs-1">Wine:</dt>
                <dd class="fw-semibold"> {{ $wine->wine }} </dd>

                <dt class="fs-3">Winery:</dt>
                <dd class="fw-semibold">{{ $wine->winery }}</dd>

                <dt class="fs-3">Location:</dt>
                <dd class="fw-semibold">{{ $wine->location }}</dd>
                <a href="{{route('wines.index')}}" class="btn btn-outline-primary" title="Indietro"><i class="fa-solid fa-square-caret-left" ></i></a>
    </section>
@endsection
