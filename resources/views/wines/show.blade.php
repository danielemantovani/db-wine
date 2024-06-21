@extends('layouts.app')

@section('content')
    <section>
        <h1 class="py-5 text-center">Wine Detail Page</h1>
        <div class="container d-flex border border-secondary-subtle">
            <img src=" {{ $wine->image }} " class="img-fluid" alt="{{ $wine->image }}">
            <dl class="px-5">
                <dt class="fs-1">Wine:</dt>
                <dd class="fw-semibold"> {{ $wine->wine }} </dd>

                <dt class="fs-3">Winery:</dt>
                <dd class="fw-semibold">{{ $wine->winery }}</dd>

                <dt class="fs-3">Location:</dt>
                <dd class="fw-semibold">{{ $wine->location }}</dd>

    </section>
@endsection
