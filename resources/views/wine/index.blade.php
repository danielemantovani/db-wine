@extends('layouts.app')

@section('content')
    <section>
        <div class="container text-center">
            <h1 class="py-5">Wines List</h1>
            <div class="row g-3">
               @foreach ($winesObj as $wine)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                           <picture>
                              <img src="{{ $wine->image }}" class="img-fluid" alt="{{ $wine->image }}">
                            </picture>
                            <div class="card-body">

                                <h5 class="card-title">Wine: {{ $wine->wine }}</h5>

                                <h4 class="card-subtitle">Winery: {{ $wine->winery }}</h4>
    
                                <h4 class="card-subtitle">Location: {{ $wine->location }}</h4>
    
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
